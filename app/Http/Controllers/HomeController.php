<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lincolnhack\Model\Attendee;

class HomeController extends Controller
{
    private $userId;
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
       
        return view('home');
    }
}
