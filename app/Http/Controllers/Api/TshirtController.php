<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 17/04/2017
 * Time: 19:59
 */

namespace App\Http\Controllers\Api;


use Lincolnhack\Repositories\AttendeeRepository;

class TshirtController
{
    /**
     * @var AttendeeRepository
     */
    private $attendeeRepository;
    
    /**
     * TshirtController constructor.
     * @param AttendeeRepository $attendeeRepository
     */
    public function __construct(AttendeeRepository $attendeeRepository)
    {
    
        $this->attendeeRepository = $attendeeRepository;
    }
    
    public function index()
    {
        $year=2019;
        $attendees = $this->attendeeRepository->whereYear();
        foreach ($attendees as $attendee){
            $attendee ->tshirt = $attendee["t-shirt"];
        }
        return response()->json($attendees);
    }
}