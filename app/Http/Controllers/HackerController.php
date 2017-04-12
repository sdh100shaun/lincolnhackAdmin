<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 22/03/2017
 * Time: 20:48
 */

namespace app\Http\Controllers;



use App\Events\CountdownMessage;
use GuzzleHttp\Client;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Lincolnhack\Repositories\MessageRepository;


class HackerController
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var MessageRepository
     */
    private $messageRepository;
    
    /**
     * HackerController constructor.
     *
     * @param MessageRepository $messageRepository
     */
    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }
    
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function setMessage(Request $request)
    {
        $eventfired = false;
        $data['message'] = filter_var($request->get('message'),FILTER_SANITIZE_STRING);
        $data['active'] = strtotime($request->get('active'));
        $data['type'] =$request->get('type');
        
        $countdownMessage = $this->messageRepository->addMessage($data);
       
        if($data["type"] =="countdown")
        {
            event(new CountdownMessage($countdownMessage));
            $eventfired=true;
        }
        
        
       
        return redirect('/home'."?event=".$eventfired."&type=".$data['type']);
    }
    
}