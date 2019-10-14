<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lincolnhack\Model\Attendee;

class AttendController extends Controller
{

    /**
     * @var Attendee
     */
    private $attendee;

    public function __construct(Attendee $attendee)
    {

        $this->attendee = $attendee;
    }

    public function save(Request  $request)
    {
        /**
         * {"name":"shaun hare","email":"shaun.hare@dvsa.gov.uk","emergency-name":"234567890","emergency-contact-number":"234567890","pies":"Steak, Kidney & Mushroom","t-shirt":"L","allergies":null,"other":null}
         */


        $this->attendee = $this->attendee->add($request->toArray());


        return json_encode($request->post());
    }
    
}