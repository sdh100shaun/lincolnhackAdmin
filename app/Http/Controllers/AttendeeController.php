<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendee;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Lincolnhack\Model\Attendee;
use Lincolnhack\Model\Tshirt;

class AttendeeController extends Controller
{
    /**
     * @var Attendee
     */
    private $attendee;
    /**
     * @var Client
     */
    private $client;
    /**
     * @var Tshirt
     */
    private $tshirt;
    
    private $hackbot;
    
    /**
     * AttendeeController constructor.
     * @param Attendee $attendee
     * @param Client $client
     * @param Tshirt $tshirt
     */
    public function __construct(Attendee $attendee, Tshirt $tshirt)
    {
        $this->hackbot = Config::get('hackbot');
        $this->attendee = $attendee;
        $this->client = new Client([
            'auth' => [$this->hackbot["username"], $this->hackbot["password"]],
        ]);
        $this->tshirt = $tshirt;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('attendee.index',["tshirtsizes"=>$this->tshirt->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendee $request)
    {
        $this->attendee = $this->attendee->add($request->toArray());
        
        if($this->attendee->isAlreadyRegistered)
        {
            $message = "Your attendee email was already registered on ".$this->attendee->updated_at;
            $message .= PHP_EOL."If you need to update your details please contact the organisers.";
            
            return redirect("attendee")->withErrors(
                $message
            );
        }
        else{
            try{
                $this->configureForHackbot();
                $this->attendee->hackbotStatus = json_decode($this->attendee->postToHackbot());
            }
            catch (ClientException $clientException)
            {
                Log::info(json_encode(["error"=>$clientException->getMessage()]));
            }
            
        }
        return $this->show($this->attendee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee)
    {
        if(auth()->guest())
        {
            return view('attendee.confirm',["attendee"=>$attendee]);
        }
        return json_encode($attendee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendee $attendee)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     *
     * @param Attendee $attendee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee)
    {
       
    }
    
    private function configureForHackbot()
    {
        $this->attendee->setClient($this->client);
        $this->attendee->setBaseUrl($this->hackbot["api"]);
    }
}
