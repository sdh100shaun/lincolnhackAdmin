@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Post a message</h2>
        </div>
    </div>
    <messages></messages>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Tshirts</h2>
        </div>
    </div>

    <tshirt source="../api/shirts"></tshirt>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h2>Attendees</h2>
        </div>
        <div class="container">

            <table class="table-bordered table-striped table-responsive table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Dietary requirements</th>
                    <th>Contact</th>
                    <th>Registered</th>
                </tr>
                </thead>
                <tbody>
                @foreach($attendees as $attendee)
                    <tr>
                        <td>{{$attendee->firstName}} {{$attendee->lastName}}</td>
                        <td>{{$attendee->attendeeId}}</td>
                        <td>{{$attendee->dietaryRequirements}}</td>
                        <td>{{$attendee->getAttribute('attendee-contact')}}</td>
                        <td><select><option value="no">no</option><option value="yes">yes</option></select></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
