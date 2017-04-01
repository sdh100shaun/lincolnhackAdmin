<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 22/03/2017
 * Time: 20:48
 */

namespace app\Http\Controllers;


use App\Http\Requests\StoreAttendee;
use GuzzleHttp\Client;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Lincolnhack\Model\Attendee;
use Lincolnhack\Model\Slack;


class HackerController
{
    /**
     * @var Client
     */
    private $client;
    
    /**
     * HackerController constructor.
     * @param Client $client
     */
    public function __construct(Client $client, Repository $config)
    {
        $this->slack = $config->get('slack');
        $this->client = $client;
    }
    
    public function setMessage(Request $request)
    {
        
      // @todo handle post from the message component
        
        
    }
}