@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <h2>Post a message</h2>
        </div>
    </div>
    <messages></messages>


    <div class="row" id="attendees">
        <div class="col-md-offset-1 col-md-8">
            <div>
            <h2>Attendees </h2>
            <p>    <span> {{$noAttendees}} have confirmed.</span></p>
            </div>
        </div>
        <div class="container" >

            <table class="table-bordered table-striped table-responsive table">
                <thead>

                    <th>Name :  <span class="pull-right"> <input class="search" placeholder="Search" /></span>
                    </th>
                    <th>email</th>
                    <th>Dietary requirements</th>
                    <th>Contact</th>
                    <th>Confirmed & Registered</th>
                </tr>
                </thead>

                <tbody class="list">
                <form>
                @foreach($attendees as $attendee)
                    <tr>
                        <td class="firstname">{{$attendee->firstName}} {{$attendee->lastName}}</td>
                        <td class="lastname">{{$attendee->attendeeId}}</td>
                        <td>{{$attendee->dietaryRequirements}}</td>
                        <td>{{$attendee->getAttribute('attendee-contact')}}</td>
                        @if($attendee->registered)
                            <?php $registered = "checked" ?>
                            @else
                            <?php $registered = false ?>
                         @endif

                        <td>
                            <register id="cmn-toggle-{{$attendee->_id}}" attendee="{{$attendee->_id}}" checked="{{$registered}}"></register>
                            <p>{{$registered}}</p>
                        </td>

                    </tr>
                @endforeach
                </form>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <h2>Tshirts</h2>
        </div>
    </div>

    <tshirt source="../api/shirts"></tshirt>

@endsection
