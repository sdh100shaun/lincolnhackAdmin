<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 13:21
 */

namespace Lincolnhack\Model;


use Jenssegers\Mongodb\Eloquent\Model;

class OneTimePassword extends Model
{
    
    public function verify(string $token,string $email)
    {
        
       return $this->where('email','=',$email)->get();
        
        
    }
    
    public function isValid(string $token):bool
    {
        
    }
    
    
    
}