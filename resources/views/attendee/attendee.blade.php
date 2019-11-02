@extends('layouts.form')

@section('content')
@include('partials.header')
<div class="container-fluid sponsor-page" id="app">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 class="text-center"><strong>Information for Hackers </strong></h1>
                <hr/>
                <p class="text-center">We are really looking forward to you joining the hack - we hope you are too.
                </p>
                <p class="text-center">This is a place where you can confirm your tickets find out a bit more info and
                    reach out to us if there is
                    anything you need to know prior to the event.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="text-center"><strong>Attendee Details</strong></h2>
                <hr/>
                <p class="text-center">Each attendee will need to fill out this information. If you have booked multiple
                    tickets please enter the details for each person.</p>
                <p class="text-center">This is your confirmation of attendance. It is important to complete this
                    otherwise we may not be able to register you.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row attendee-form">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <attendance/>
            </div>
        </div>
        <hr/>
    </div>
    <div class="row">
        <div class="container-fluid attendee-location">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">How to find us.</h2>
                </div>
                <div class="col-sm-12" id="map" style="height: 400px; border:none;"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 attendee-location">
                    <img src="/images/assets/mosiac.svg" alt="Mosaic digital hub" class=""/>
                    <br />Mosaic Digital Hub, Thomas Parker House , Silver Street , Lincoln LN2 1JZ
                    <br/>
                    <span>&nbsp;Contact us at hello@lincolnhack.org or @techlincs</span>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid what">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center">Challenges.</h2>
            <hr/>
            <p class="text-center"> Our Gold sponsors each set a challenge, check them out.</p>

        </div>

    </div>
    <div class="row">

        <div class="col-md-4 col-md-offset-0 col-md-push-4 col-sm-10 col-sm-offset-1">

            <ul class="list-unstyled sponsor-list">
                @foreach($sponsors as $sponsor)
                    <li><a href="../../sponsors/gold/{{$sponsor->name}}" title="{{$sponsor->name}}">
                            <img class="img-responsive center-block"
                                 src="../../images/assets/sponsors/{{$sponsor->name}}.svg" alt="{{$sponsor->name}}"
                                 width="50%" height="50%"/>
                        </a>

                        </li>
                @endforeach
            </ul>


            <p> Also please check out our <a href="../../sponsors/silver/cooperpress">Silver sponsors</a> , without
                which the event would not happen.</p>
            <div class="flex-container text-center">

                <div class="flex-item"><img width="350px" src="../../images/assets/sponsors/cooperpress.svg"
                                            alt="Cooper Press"/>
                </div>

            </div>

        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.scripts')
@endsection
