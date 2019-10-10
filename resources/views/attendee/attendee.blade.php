@include('partials.head')


<div class="container-fluid sponsor-page">
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
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <attendance />
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
                <li><a href="../../sponsors/gold/khaoscontrol"><img
                                src="/images/assets/sponsors/KC_Square_black_text.svg" alt="Khaos Control"/></a></li>
                <li>><a href="../../sponsors/gold/epixmedia"><img src="../../images/assets/sponsors/epix-logo.svg"
                                                                  alt="Expix Media"/></a>
                </li>
                <li><a href="../../sponsors/gold/scholarpack"><img src="../../images/assets/sponsors/scholarpack.svg"
                                                                   alt="Recap.io"/></a>
                </li>
                <li><a href="../../sponsors/gold/recap"><img src="../../images/assets/sponsors/recap-io.svg"
                                                             alt="Recap.io"/></a>
                </li>

            </ul>


            <p> Also please check out our <a href="../../sponsors/silver/cooperpress">Silver sponsors</a> , without
                which the event would not happen.</p>
            <div class="flex-container text-center">
                <div class="flex-item">
                    <img width="150px" src="/images/assets/sponsors/streetsheaver.svg" alt="Streets Heaver"/>
                </div>
                <div class="flex-item"><img width="150px" src="../../images/assets/sponsors/selenity.svg"
                                            alt="Selenity"/>
                </div>
                <div class="flex-item"><img width="150px" src="../../images/assets/sponsors/cooperpress.svg"
                                            alt="Cooper Press"/>
                </div>

            </div>

        </div>
    </div>
</div>

@include('partials.footer')