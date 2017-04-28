@extends('layouts.form')
@include('partials.header')
@section('content')
    <div class="wrapper wrapper--grey wrapper--no-margin">
        <div class="container">
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
    </div>
    <div class="parallax parallax--boole">

    </div>
    <div class="wrapper wrapper--no-margin">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h h--1 xs-center">How to find us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="map" style="height: 400px"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 attendee-location">
                    <img src="images/lsip-white.png" alt="Lincoln Science and Innovation Park"/> <span>
                            Boole Technology Centre,
                            Beevor St,
                            Lincoln,
                            LN6 7DJ</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="parallax">

    </div>
    <div class="wrapper wrapper--grey wrapper--no-margin">
        <div class="container">
            <div class="row">
                <h3 class="h h--1 xs-center">Schedule</h3>
                <p class="xs-center">Subject to change...</p>
                <div class="col-sm-5">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td colspan="2" style="border-top: none">
                                <h5 class="h h--5">Saturday, May 20th</h5>
                            </td>
                        </tr>
                        <tr>
                            <td><b>10:00</b></td>
                            <td>Registration</td>
                        </tr>
                        <tr>
                            <td><b>11:00</b></td>
                            <td>Welcome Presentation</td>
                        </tr>
                        <tr>
                            <td><b>12:00</b></td>
                            <td>Hacking begins</td>
                        </tr>
                        <tr>
                            <td><b>13:00</b></td>
                            <td>Lunch</td>
                        </tr>
                        <tr>
                            <td><b>18:30</b></td>
                            <td>Evening meal and Drinks</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-5 col-sm-offset-2">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td colspan="2" style="border-top: none">
                                <h5 class="h h--5">Sunday, May 21st</h5>
                            </td>
                        </tr>
                        <tr>
                            <td><b>8:30</b></td>
                            <td>Breakfast</td>
                        </tr>
                        <tr>
                            <td><b>9:30</b></td>
                            <td>Morning Briefing</td>
                        </tr>
                        <tr>
                            <td><b>12:00</b></td>
                            <td>Hacking Ends &amp; Lunch</td>
                        </tr>
                        <tr>
                            <td><b>13:00</b></td>
                            <td>Hack demonstrations</td>
                        </tr>
                        <tr>
                            <td><b>16:45</b></td>
                            <td>Awards Ceremony</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax parallax--boole">

    </div>
    <div class="wrapper wrapper--no-margin wrapper--grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h h--1 xs-center">Contact us</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 col-sm-offset-2 center">
                    Slack: <a href="https://lincolnhack.slack.com">LincolnHack</a>
                </div>
                <div class="col-sm-3 center">
                    Twitter: <a href="https://twitter.com/techlincs">@techlincs</a>
                </div>
                <div class="col-sm-3 center">
                    Email: <a href="mailto:hello@lincolnhack.org">hello@lincolnhack.org</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        // initialize the map
        var map = L.map('map').setView([53.227252, -0.55722], 17);
        map.panTo(new L.LatLng(53.227252, -0.55722));
        L.marker([53.227522, -0.5572222]).addTo(map).bindPopup("Boole Technology centre");

        // load a tile layer
        L.tileLayer('https://api.mapbox.com/styles/v1/sdh100shaun/cj10vkv6300552rnjnss2nwc4/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2RoMTAwc2hhdW4iLCJhIjoibnRxYmNfMCJ9.wTlIV3WF0NboEok9OPhzWQ',
                {
                    maxZoom: 17,
                    minZoom: 9
                }).addTo(map);

    </script>
@endsection



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