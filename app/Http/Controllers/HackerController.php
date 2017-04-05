<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 22/03/2017
 * Time: 20:48
 */

namespace app\Http\Controllers;



use App\Events\CountdownMessageEvent;
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
    
    public function setMessage(Request $request)
    {
        
        $data['message'] = filter_var($request->get('message'),FILTER_SANITIZE_STRING);
        $data['active'] = strtotime($request->get('active'));
        $data['type'] =$request->get('type');
        
        $this->messageRepository->addMessage($data);
        event(new CountdownMessageEvent($data));
        return redirect('/home');
    }
    
}