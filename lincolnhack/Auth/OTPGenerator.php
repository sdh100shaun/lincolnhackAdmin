<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 12:26
 */

namespace Lincolnhack\Auth;


use Illuminate\Contracts\Hashing\Hasher;
use lincolnhack\Model\OneTimePassword;

class OTPGenerator
{
    /**
     * @var Hasher
     */
    private $hasher;
    /**
     * @var OneTimePassword
     */
    private $oneTimePassword;
    
    /**
     * OTPGenerator constructor.
     * @param Hasher $hasher
     * @param OneTimePassword $oneTimePassword
     */
    public function __construct(Hasher $hasher, OneTimePassword $oneTimePassword)
    {
        $this->hasher = $hasher;
        $this->oneTimePassword = $oneTimePassword;
    }
    
    
    public function generate()
    {
        $randomString = (string) openssl_random_pseudo_bytes(22);
        
        return $randomString;
    }
    
   
}