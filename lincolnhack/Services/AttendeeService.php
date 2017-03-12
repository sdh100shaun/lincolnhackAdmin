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
    /**
     * @return string
     */
    public function model()
    {
        return __CLASS__;
    }
    public function postAttendee(Attendee $attendee)
    {
        
        
    }
    
}