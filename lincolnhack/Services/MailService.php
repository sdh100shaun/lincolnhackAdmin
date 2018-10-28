<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/09/2018
 * Time: 18:04
 */

namespace Lincolnhack\Services;


use Illuminate\Mail\Mailable;
use Jenssegers\Mongodb\Eloquent\Model;

class MailService
{

    /**
     * @var Model
     */
    private $dataSource;

    public function __construct(Model $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function sendMail(Mailable $mail)
    {
        foreach($this->dataSource->all() as $attendee)
        {

        }
        Mail::to($request->user())
            ->bcc($mailSender)
            ->queue(new $mail());
    }
    
}