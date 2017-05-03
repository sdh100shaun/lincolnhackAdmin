<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/05/2017
 * Time: 18:57
 */

namespace Tests\Unit;


use Lincolnhack\Model\OneTimePassword;
use Tests\TestCase;

class OneTimePasswordTest extends TestCase
{
    
    public function setUp()
    {
        $this->oneTimePassword = new OneTimePassword();
        parent::setUp();
    }
    
    /**
     * @test
     */
    public function testVerify()
    {
        
    }
    
}