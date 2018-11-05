<?php

namespace App\Http\Controllers;

use Lincolnhack\Model\Attendee;
use Lincolnhack\Model\Tickets;

class HomeController extends Controller
{

    /**
     * @var Attendee
     */
    private $attendee;
    /**
     * @var Tickets
     */
    private $tickets;

    /**
     * Create a new controller instance.
     *
     * @param Attendee $attendee
     */
    public function __construct(Attendee $attendee, Tickets $tickets)
    {
        $this->middleware('auth');

        $this->attendee = $attendee;
        $this->tickets = $tickets;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = $this->attendee->where('year', '<>', '2017')->get();
        $tickets = $this->matchTickets($this->tickets->all(), $attendees);
        return view('home', ['attendees' => $attendees, 'noAttendees' => count($attendees), 'tickets' => $tickets]);
    }

    private function matchTickets($tickets, $attendees)
    {

        $people = $attendees->map(function ($attendee) {
            return collect($attendee->toArray())
                ->only(['lastName'])
                ->all();
        });

        foreach ($tickets as $ticket)
        {
            foreach ($people as $person)
            {
                if($person['lastName'] == $ticket->Surname){
                    $ticket->claimed ="claimed";
                }
            }
        }
        return $tickets;
    }
}
