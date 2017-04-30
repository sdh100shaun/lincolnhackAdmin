<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 19:56
 */

namespace App\Listeners;

use \Illuminate\Auth\Events\Registered as R;
use Illuminate\Log\Writer;

class Registered
{
    
    /**
     * @var Writer
     */
    private $log;
    
    /**
     * Registered constructor.
     * @param Writer $log
     */
    public function __construct(Writer $log)
    {
    
        $this->log = $log;
    }
    
    public function handle(R $registeredEvent)
    {
        $this->log->info($registeredEvent->user->email. " registered");
        
    }
}