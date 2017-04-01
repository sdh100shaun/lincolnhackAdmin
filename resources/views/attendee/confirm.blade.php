@extends('layouts.form')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lincoln Hack Attendee</div>

                    <div class="panel-body">
                        <p> Thanks for signing up. {{$attendee->firstName}}</p>
                        <p>Confirmed : {{$attendee->attendeeId}}</p>
                        <p>T-Shirt: {{$attendee->tshirt}}</p>
                        <p>Dietary requirements: {{$attendee->dietaryRequirements}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection