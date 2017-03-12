<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 15:01
 */

namespace Tests\Unit;


use GuzzleHttp\Client;
use Lincolnhack\Model\Attendee;
use Tests\TestCase;

class AttendeeTest extends TestCase
{
    /**
     * @var Attendee
     */
    private $attendee;
    
    /**
     * @param Attendee $attendee
     */
    public function setup()
    {
        parent::setUp();
        $this->attendee = new Attendee();
        
    }
    
    /**
     * @param Attendee $attendee
     */
    public function loadModel(Attendee $attendee)
    {
        $this->attendee = $attendee;
    }
    
    public function testModelReturnsName()
    {
        $expected ="Lincolnhack\Model\Attendee";
        $this->assertEquals($expected,$this->attendee->model());
    }
    
    public function testServiceNameCorrect_whenHackBotMethodCalled()
    {
        $expected ="Lincolnhack\Services\AttendeeService";
        $this->attendee->setClient(TestCase::getMockedClient("goodAttendeeResponse.json"));
        $this->attendee->setBaseUrl("http://example.com");
        $this->attendee->postToHackbot();
        $this->assertEquals($expected,$this->attendee->getServiceClassName());
    }
}