<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 30/04/2017
 * Time: 12:22
 */

namespace Tests\Unit;


use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Hashing\BcryptHasher;
use Lincolnhack\Auth\OTPGenerator;
use Lincolnhack\Model\OneTimePassword;
use \Mockery as Mock;
use Tests\TestCase;

class OTPPasswordGeneratorTest extends TestCase
{
    /**
     * @var OTPGenerator
     */
    private $otp;
  
    private $mockModel;
    
    public function setUp()
    {
        $this->mockModel = Mock::mock(OneTimePassword::class);
        $this->otp = new OTPGenerator(new BcryptHasher(),$this->mockModel);
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
    
    /**
     * @test
     */
    public function modelPopulated()
    {
        $this->otp->generate();
    
        
    }
    
    
}