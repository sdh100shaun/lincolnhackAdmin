<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/04/2017
 * Time: 20:04
 */

namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;
use Lincolnhack\Repositories\MessageRepository;

class MessageComposer
{
    
    
    /**
     * @var MessageRepository
     */
    private $messageRepository;
    
    public function __construct(MessageRepository $messageRepository)
    {
    
        $this->messageRepository = $messageRepository;
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('message', $this->messageRepository->getLastMessage($view->name()));
    }
}