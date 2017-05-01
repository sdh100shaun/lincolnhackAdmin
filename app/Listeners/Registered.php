<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 19:56
 */

namespace App\Listeners;

use App\Notifications\SendOTP;
use \Illuminate\Auth\Events\Registered as R;
use Illuminate\Log\Writer;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;
use Lincolnhack\Auth\OTPGenerator;

class Registered
{
    use Notifiable;
    /**
     * @var Writer
     */
    private $log;
    /**
     * @var OTPGenerator
     */
    private $OTPGenerator;
    
    public $email;
    
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
        $this->email = $model->email;
        $registeredEvent->user->password = $this->OTPGenerator->hashPassword();
        
        $this->notify(new SendOTP($registeredEvent->user));
    }
    
    public function routeNotificationForSlack()
    {
        return Config::get('slack.webhook.admin');
    }
}