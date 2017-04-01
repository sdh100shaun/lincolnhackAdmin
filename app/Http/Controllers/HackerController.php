<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 22/03/2017
 * Time: 20:48
 */

namespace app\Http\Controllers;



use GuzzleHttp\Client;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;



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