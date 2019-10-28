<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 13:58
 */

namespace Lincolnhack\Model;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Lincolnhack\Traits\ServiceLoader;

class Attendee extends Model
{
    use ServiceLoader;
    
    protected  $service;
    
    
    
    protected $collection = "attendees";
    
    
    public function model()
    {
        return __CLASS__;
    }
    
    public function postToHackbot()
    {
        $this->setServiceClassName();
        $this->service = $this->getService();
        return $this->service->postAttendee($this);
        
    }
    
    /**
     * @param array $properties
     * @return Attendee
     */
    public function add(array $properties):Attendee
    {
        $self = $this;
        array_walk($properties,function($value,$key) use ($self) {
            $self->$key = $value;
        });
        $self = $this->where('attendeeId', $this->attendeeId)->where('year','<>','2017')->first();
        
        if(empty($self))
        {   $self = $this;
            $this->save();
        }
        else
        {
            $self->isAlreadyRegistered = true;
        }
        return $self;
    }

    public function addYear(array $data)
    {
        $data['year'] = '2019';
        return $data;
    }


    public function setAttendeeId($email)
    {
        $this->attendeeId = $email;
    }



}