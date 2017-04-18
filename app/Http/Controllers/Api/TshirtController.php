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
        return response()->json($this->attendeeRepository->getAll());
    }
}