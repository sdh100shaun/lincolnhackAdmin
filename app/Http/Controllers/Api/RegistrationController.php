<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 17/05/2017
 * Time: 15:47
 */

namespace app\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lincolnhack\Model\Attendee;

class RegistrationController extends Controller
{
    
    /**
     * @var Attendee
     */
    private $attendee;
    
    /**
     * RegistrationController constructor.
     * @param Attendee $attendee
     */
    public function __construct(Attendee $attendee)
    {
        
        $this->attendee = $attendee;
    }
    
    public function register(Request  $request)
    {
        $this->validate($request, [
            'id' => array('required','Regex:/^[0-9a-fA-F]{24}$/'),
            'state' => array('required')
        ]);
        $id = $request->input("id");
        $attendee = $this->attendee->find($id);
        $state = $request->input('state');
        
        $attendee->registered = (bool) $state;
        $attendee->save();
        return response()->json(array("registered"=>$state));
    }


}