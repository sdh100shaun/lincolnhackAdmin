<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/04/2017
 * Time: 17:03
 */

namespace Lincolnhack\Model;


use Lincolnhack\Traits\ServiceLoader;

class Slack
{
    use ServiceLoader;
    
    
    private $service;
    
    public function model()
    {
        return __CLASS__;
    }
    
    public function sendSlackInvite(Attendee $attendee,$token,$endpoint)
    {
        $this->setServiceClassName();
        $this->service = $this->getService();
        $this->service->setToken($token);
        return $this->service->invite($attendee,$endpoint);
        
    }
    
}