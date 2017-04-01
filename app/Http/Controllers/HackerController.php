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
    
    public function index()
    {
        
        $slackToken = $this->slack['token'];
        $slackApi=$this->slack['url'];
        $slackApi.='/api/users.admin.invite?t=' . time();
        $slack->setBaseUrl($slackApi);
        $slack->setClient($this->client);
        
        return $slack->sendSlackInvite($attendee),$slackToken,$slackApi);
        
    }
}