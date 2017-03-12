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
    
}