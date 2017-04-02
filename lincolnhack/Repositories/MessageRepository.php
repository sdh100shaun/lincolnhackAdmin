<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/04/2017
 * Time: 20:14
 */

namespace Lincolnhack\Repositories;


use Illuminate\Container\Container;
use lincolnhack\Model\Message;

class MessageRepository
{
    
    /**
     * @var Container
     */
    private $container;
    
    /**
     * MessageRepository constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    /**
     * @return string
     */
    public function getLastMessage($type):string
    {
        $lastMessage = '';
        
        $message = $this->makeModel();
        
        if (!empty($type)) {
            $message = $message->where('active', '>', time())->where('type', $type)->get();
            if (!$message->isEmpty()) {
                $lastMessage = $message->first()->message;
            }
        }
        
        
        return $lastMessage;
    }
    
    /**
     *
     * @return Message
     */
    private function makeModel():Message
    {
        $modelName = str_replace('Repositories', 'Model', __CLASS__);
        $modelName = str_replace('Repository', '', $modelName);
        
        return $this->container->make($modelName);
        
    }
    
    /**
     * @param array $properties
     * @return Message
     */
    public function addMessage(array $properties):Message
    {
        $model = $this->makeModel();
        array_walk($properties, function ($value, $key) use ($model) {
            $model->$key = $value;
        });
        $model->save();
        return $model;
    }
    
}