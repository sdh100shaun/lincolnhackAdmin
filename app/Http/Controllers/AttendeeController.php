<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendee;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Lincolnhack\Model\Attendee;
use Lincolnhack\Model\Slack;
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
     * @var Client
     */
    private $slackClient;
    /**
     * @var Repository
     */
    private $config;
    
    /**
     * AttendeeController constructor.
     * @param Attendee $attendee
     * @param Tshirt $tshirt
     * @param Client $slackClient
     * @param Repository $config
     * @internal param Client $client
     */
    public function __construct(Attendee $attendee, Tshirt $tshirt, Client $slackClient, Repository $config)
    {
        $this->config = $config;
        $this->hackbot = $this->config->get('hackbot');
        $this->slack = $this->config->get('slack');
        $this->attendee = $attendee;
        $this->client = new Client([
            'auth' => [$this->hackbot["username"], $this->hackbot["password"]],
        ]);
        $this->tshirt = $tshirt;
        $this->slackClient = $slackClient;
       
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('attendee.attendee',["tshirtsizes"=>$this->tshirt->all(),'type'=>'gold']);
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
     * @param StoreAttendee|Request $request
     * @param Slack $slack
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendee $request, Slack $slack)
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
                $slackToken = $this->slack['token'];
                $slackApi=$this->slack['url'];
                $slackApi.='/api/users.admin.invite?t=' . time();
                $slack->setBaseUrl($slackApi);
                $slack->setClient($this->slackClient);
                $this->attendee->slackResponse = $slack->sendSlackInvite($this->attendee,$slackToken,$slackApi);
                
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
            return view('attendee.confirm',["attendee"=>$attendee, 'type'=>'silver']);
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
