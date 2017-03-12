<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 14:19
 */

namespace Lincolnhack\Services;


use Lincolnhack\Model\Attendee;

class AttendeeService extends AbstractService
{
    
    public function postAttendee(Attendee $attendee)
    {
        $endpoint = $this->baseUrl ."/attendees";
        $this->setHeaders(["Content-Type"=>"application/vnd.api+json"]);
        
        $response = $this->sendPostRequest($endpoint,$this->getJsonFromObject($attendee),$this->getHeaders());
        return $response;
        
    }
    
    /**
     * @param $attendee
     */
    public function getJsonFromObject(Attendee $attendee)
    {
       $data = ["data"=>["type"=>"attendees","id"=>$attendee->attendeeId]];
        
       return json_encode($data,JSON_FORCE_OBJECT);
        
        
    }
    
}