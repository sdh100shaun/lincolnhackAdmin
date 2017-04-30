<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 12:22
 */

namespace Tests\Unit;


use Illuminate\Hashing\BcryptHasher;
use Lincolnhack\Auth\OTPGenerator;
use Lincolnhack\Model\OneTimePassword;
use Tests\TestCase;

class OTPPasswordGeneratorTest extends TestCase
{
    /**
     * @var OTPGenerator
     */
    private $otp;
    
    public function setUp()
    {
        $this->otp = new OTPGenerator(new BcryptHasher(),new OneTimePassword());
        parent::setUp();
    }
    
    /**
     * @test
     */
    public function tokenGenerated()
    {
        $actual = $this->otp->generate();
        $this->assertNotEmpty($actual);
       
    }
    
    /**
     * @test
     */
    public function tokenGenerateDifferentEachTime()
    {
       $token1 = $this->otp->generate();
       $token2 = $this->otp->generate();
       
       $this->assertNotSame($token1,$token2);
    }
    
    public function tokenValidates()
    {
        
    }
    
    
}