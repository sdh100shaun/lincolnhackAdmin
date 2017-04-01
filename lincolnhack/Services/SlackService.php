<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/04/2017
 * Time: 14:15
 */

namespace Lincolnhack\Services;


use Lincolnhack\Model\Attendee;


class SlackService extends AbstractService
{
    
    
  
    private $slackToken;
    
    public function setToken($slackToken)
    {
        $this->slackToken = $slackToken;
       
    }
    
    
    public function invite(Attendee $attendee, $endpoint)
    {
     
        $firstName = $attendee->firstName;
        $lastName = $attendee->lastName;
       
        $email = $attendee->attendeeId;
    
       
        $this->setHeaders(['Content-Type'=>'application/x-www-form-urlencoded']);
        $api_response = $this->sendPostRequest($endpoint, [
            'email' => $email,
            'token'=>$this->slackToken,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'set_active' => 'true',
            '_attempts' => '1'
        ]);
    
        if($this->lastRequestCode == 200)
        {
            return $api_response;
            
        }
        return json_encode(["error"=>$this->lastRequestCode]);
    }
}