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
use Lincolnhack\Auth\OTPGenerator;

class Registered
{
    
    /**
     * @var Writer
     */
    private $log;
    /**
     * @var OTPGenerator
     */
    private $OTPGenerator;
    
    /**
     * Registered constructor.
     * @param Writer $log
     * @param OTPGenerator $OTPGenerator
     */
    public function __construct(Writer $log, OTPGenerator $OTPGenerator)
    {
    
        $this->log = $log;
        $this->OTPGenerator = $OTPGenerator;
    }
    
    public function handle(R $registeredEvent)
    {
        $this->log->info($registeredEvent->user->email. " registered");
        $this->OTPGenerator->generate();
        $model = $this->OTPGenerator->getOneTimePassword();
        $model->email = $registeredEvent->user->email;
        $model->save();
    }
}