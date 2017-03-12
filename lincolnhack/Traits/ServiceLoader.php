<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 14:33
 */

namespace Lincolnhack\Traits;


trait ServiceLoader
{
    private $className;
    
    /**
     * @return mixed
     */
    public function getServiceClassName()
    {
        return $this->className;
    }
    
    private $baseUrl;
    
    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
    
    /**
     * @param mixed $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }
    
    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }
    
    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }
    
    Private $client;
    
    /**
     *
     */
    public function setServiceClassName()
    {
        if (!empty($this->model())) {
            $this->className = str_ireplace("Model","Services",$this->model()).'Service';
        }
    
    }
    /**
     * Service factory essentailly- requires a classname derived from model and
     * service args from properties
     * @param $className
     * @param ...$args
     * @return object
     */
    public function getService()
    {
    
        
        
        if (class_exists($this->className)) {
            
            $args = [$this->baseUrl,$this->client];
            
            if ($args) {
                
                $reflectedClass = new \ReflectionClass($this->className);
                $class = $reflectedClass->newInstanceArgs($args);
                
                return $class;
            }
            
            return new $this->className();
        }
        
        return null;
    }


    
    
}