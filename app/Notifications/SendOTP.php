<?php

namespace App\Notifications;


use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendOTP extends Notification
{
    use Queueable;
    /**
     * @var Registered
     */
    private $registered;
    
    /**
     * Create a new notification instance.
     *
     * @param Registered $registered
     */
    public function __construct(User $registered)
    {
        //
        $this->registered = $registered;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Your set as an admin for LincolnHack ')
                    ->line('The following is the way to access the system once only, once that has been done update your password to enter using that.')
                    ->action('Your magic login link ', url('/sesame?token='.$this->registered->password."&email=".$this->registered->email));
                   
    }
    
    /**
     * @param $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable):SlackMessage
    {
        $url = url('/sesame?token='.$this->registered->password."&email=".$this->registered->email);
        $email = $this->registered->email;
        $name = $this->registered->name;
        return (new SlackMessage)
            ->from('LincolnHack',':lincolnhack:')
            ->success()
            ->content('Access the LincolnHack admin ')
            ->attachment(function ($attachment) use ($url,$email,$name) {
                $attachment->title('Access details for '.$name, $url)
                    ->fields([
                        'email' => $email
                    ]);
            });
    }
    
    
}
