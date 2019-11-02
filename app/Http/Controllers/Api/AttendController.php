<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Lincolnhack\Model\Attendee;
use Lincolnhack\Model\Tickets;

class AttendController extends Controller
{

    /**
     * @var Attendee
     */
    private $attendee;
    /**
     * @var Tickets
     */
    private $tickets;

    public function __construct(Attendee $attendee, Tickets $tickets)
    {

        $this->attendee = $attendee;
        $this->tickets = $tickets;
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function save(Request  $request, Response $response)
    {
        $data = $request->toArray();

        if($this->isAlreadyConfirmed($data)){
           return $response->setStatusCode(400);
        }

        $data = $this->attendee->addYear($data);
        $this->attendee->setAttendeeId($data['attendeeId']);

        $this->attendee = $this->attendee->add($data);
        return JsonResponse::create(['added' =>true])->status(200);
    }

    public function isAlreadyConfirmed($data): bool
    {
        $attendee = $this->attendee->where('attendeeId', $data['attendeeId'])->where('year','2019')->first();
        return $attendee->confirmed ?? false;

    }

}