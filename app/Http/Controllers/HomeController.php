<?php

namespace App\Http\Controllers;

use Lincolnhack\Model\Attendee;

class HomeController extends Controller
{

    /**
     * @var Attendee
     */
    private $attendee;
    
    /**
     * Create a new controller instance.
     *
     * @param Attendee $attendee
     */
    public function __construct(Attendee $attendee)
    {
        $this->middleware('auth');
    
        $this->attendee = $attendee;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = $this->attendee->where('year','<>','2017')->get();
        return view('home',['attendees'=>$attendees, 'noAttendees'=>count($attendees)]);
    }
}
