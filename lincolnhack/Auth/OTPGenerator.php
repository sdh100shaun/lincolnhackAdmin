<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 12:26
 */

namespace Lincolnhack\Auth;


use Illuminate\Contracts\Hashing\Hasher;
use Lincolnhack\Model\OneTimePassword;

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
    
    /**
     * @return OneTimePassword
     */
    public function getOneTimePassword(): OneTimePassword
    {
        return $this->oneTimePassword;
    }
    
    /**
     * @return mixed
     */
    public function generate()
    {
        $randomString = random_bytes (22);
        $randomString = bin2hex($randomString);
        $this->oneTimePassword->password = $randomString;
        return $this->getOneTimePassword()->password;
    }
    
    /**
     * @return string
     */
    public function hashPassword()
    {
        return $this->hasher->make($this->getOneTimePassword()->password);
    }
   
}