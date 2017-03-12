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
    
    public function add(array $properties):Attendee
    {
        $self = $this;
        array_walk($properties,function($value,$key) use ($self) {
            $self->$key = $value;
        });
        $self = $this->where('attendeeId', $this->attendeeId)->first();
        
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
    
}