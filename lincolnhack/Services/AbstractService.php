<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 14:24
 */

namespace lincolnhack\Services;



use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;


abstract class AbstractService
{
    
    private $debug;
    private $baseUrl;
    private $client;
    public $headers;
    
    public $lastRequestCode;
    
    /**
     * @param $baseUrl
     * @param $client
     */
    public function __construct($baseUrl, Client $client)
    {
        $this->baseUrl = $baseUrl;
        $this->client = $client;
        $this->debug = false;
    }
    
    
    
    
    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return is_null($this->headers)?[]:$this->headers;
    }
    
    /**
     * @param mixed $headers
     */
    public function setHeaders(array $headers)
    {
        if(is_array($this->headers))
        {
            $this->headers = array_merge($headers,$this->headers);
        }
        else
        {
            $this->headers = $headers;
        }
        
    }
    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->$name;
        
    }
    public function __set($name, $value)
    {
        $this->$name =$value;
        
    }
    
    
    /**
     * @param $endpoint
     * @param $postData
     * @param array $headers
     * @return string
     */
    public function sendPostRequest($endpoint, $postData,array $headers = [])
    {
        $body ="";
        $isJson = true;
        if(is_array($postData)){
            
            $body .= http_build_query($postData);
            $isJson = false;
            
        }
        else
        {
            $body .= $postData;
        }
        
        
        
        
        $this->setHeaders(array_merge(['accept-charset' => "UTF-8"],$headers));
        
        try {
            $this->logCall($endpoint,$body,$isJson);
            $request = new Request('POST', $endpoint, $this->getHeaders(), $body);
            
            
            
            
            
            $res = $this->client->send($request,['timeout' => 20]);
            return $this->handleResponse($res,$endpoint);
            
        } catch (RequestException $e) {
            Log::info("request exception thrown");
            Log::info($e->getRequest());
            if ($e->hasResponse()) {
                Log::info($e->getResponse());
            }
        }
        
        
        
        
        
    }
    
    public function sendPutRequest($endpoint, $jsonBody, array $headers = [])
    {
        
        
        if(!empty($jsonBody)){
            
            
            $this->setHeaders($headers);
            
            
            try {
                $this->logCall($endpoint,$jsonBody);
                
                $request = new Request('PUT', $this->baseUrl.$endpoint, $this->getHeaders(), $jsonBody);
                
                
                
                $res = $this->client->send($request,['timeout' => 20]);
                
                
                
                return $this->handleResponse($res,$endpoint);
                
            } catch (RequestException $e) {
                Log::info("request exception thrown");
                Log::info($e->getRequest());
                if ($e->hasResponse()) {
                    Log::info($e->getResponse());
                }
            }
            
        }
        
        return "{'error':'no data supplied}";
        
    }
    
    
    public function sendGetRequest($endpoint, $headers = [])
    {
        
        
        try {
            $this->logCall($endpoint,"{}");
            $request = new Request("GET", $this->baseUrl .$endpoint, $headers);
            
            $res = $this->client->send($request,['timeout' => 40]);
            
            
            
            return $this->handleResponse($res,$endpoint);
            
        }
        catch (RequestException $e) {
            Log::info("request exception thrown");
            Log::info($e->getRequest());
            if ($e->hasResponse()) {
                Log::info($e->getResponse());
            }
            return $this->formatError($e->getCode(), $e->getMessage());
        }
        
        catch(ClientException $e)
        {
            
            return $this->formatError($e->getCode(), $e->getMessage());
        }
        
        
        
    }
    /**
     * @param $res
     * @return string
     */
    protected function handleResponse(ResponseInterface $res,$endpoint)
    {
        
        
        $this->lastRequestCode = $res->getStatusCode();
        $this->logResponse($endpoint,$this->lastRequestCode,(string) $res->getBody());
        return (string) $res->getBody();
        
        
        
    }
    
    /**
     * @param $data
     */
    private function formatError($code, $message)
    {
        $this->lastRequestCode = $code;
        return json_encode(array("error"=>array("code"=>$code,"reason"=>$message)));
        
    }
    
    
    public function invokeMethod($methodName, $args)
    {
        $reflectionMethod = new \ReflectionMethod($this,$methodName);
        return $reflectionMethod->invokeArgs($this, $args);
    }
    
    private function logCall($endpoint, $params,$isJson=true)
    {
        if($this->debug)
        {
            Log::debug("called ".$endpoint);
            $headers = json_encode($this->getHeaders());
            Log::debug($headers);
            if($isJson)
            {
                Log::debug("with params ".$params);
            }
            else
            {
                Log::debug("with params ".json_encode($params));
            }
        }
    }
    
    
    private function logResponse($endpoint,$responseCode,$response)
    {
        if($this->debug)
        {
            Log::debug("response from ".$endpoint. " ". $responseCode);
            
            Log::debug("with body ".$response);
            
        }
    }
}
