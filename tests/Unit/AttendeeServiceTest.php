<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 12/03/2017
 * Time: 15:34
 */

namespace Tests\Unit;


use Lincolnhack\Model\Attendee;
use Lincolnhack\Services\AttendeeService;
use Tests\TestCase;

class AttendeeServiceTest extends TestCase
{
    /**
     * @var AttendeeService
     */
    private $attendeeService;
    
    public function setUp()
    {
        parent::setUp();
        $this->attendeeService = new AttendeeService("http://example.com", TestCase::getMockedClient("goodAttendeeResponse.json"));
    }
    public function testGoodResponse()
    {
        $attendeeId = "shaun@shaunhare.co.uk";
        $attendee = new Attendee();
        $attendee->attendeeId=$attendeeId;
        $response = $this->attendeeService->postAttendee($attendee);
        self::assertJson($response);
    }
    
    public function testAttendeeDataCorrect()
    {
        $attendeeId = "shaun@shaunhare.co.uk";
        $attendee = new Attendee();
        $attendee->attendeeId=$attendeeId;
        $data = $this->attendeeService->getJsonFromObject($attendee);
        self::assertJson($data);
        self::assertJsonStringEqualsJsonFile(__DIR__."/../fixtures/attendee.json",$data);
    }
}