@extends('layouts.site')

@include('partials.header')

<section class="light container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="sectionHeader"> A hackathon </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-1">


            <img src="images/promo-img.png" class="img-responsive"/>
        </div>


        <div class="col-md-2">

            <img src="images/promo-2.png" class="img-responsive"/>

        </div>
        <div class="col-md-5">


            <p>
                Lincoln Hack is a free 24 hour coding competition where teams of up to four people compete for fantastic
                prizes. They start with an idea and build it in to something. Hardware hacks, software hacks, API
                mash-ups, funny things, arty things, noisy things... whatever you decide to create, you’ve got 24 hours
                to do it!

            </p>
            <p>
                Lincoln Hack is in it's second year and is still celebrating it's success from last year.
                This year, it is being held to coincide with Lincolnshire Tech Week, and moves to a new
                building.
                We plan to keep the great atmosphere though and fun and mix of great people, from students to veterans
                all are welcome as long as your interested in tech, willing to build something and enjoy meeting
                like-minded
                people you will enjoy it we are sure.
            </p>

            <p>
                <span class="highlight">And it is a FREE event. </span>
                There is no excuse not to come along ....
                <a href="https://www.eventbrite.com/e/lincolnhack-ii-tickets-33165401609" class="btn btn-default tickets center">GET TICKETS NOW <i class="ticket-link"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve" width="512px" height="512px">
<g>
    <g>
        <path d="M378.473,104.189l-28.348-19.626c-3.791-2.623-8.991-1.678-11.616,2.112c-2.625,3.791-1.678,8.991,2.112,11.616    l28.348,19.626c3.754,2.599,9.018,1.638,11.615-2.111C383.208,112.013,382.263,106.813,378.473,104.189z" fill="#FFFFFF"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path d="M435.17,143.439l-28.348-19.625c-3.791-2.625-8.99-1.679-11.616,2.111c-2.626,3.791-1.681,8.991,2.11,11.616    c0,0,28.292,19.586,28.348,19.625c3.611,2.5,8.978,1.699,11.616-2.111C439.905,151.265,438.96,146.064,435.17,143.439z" fill="#FFFFFF"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M167.004,134.473l-33.566-7.877c-4.487-1.052-8.98,1.731-10.035,6.22c-1.053,4.489,1.732,8.981,6.22,10.035l33.566,7.877    c0.642,0.15,1.282,0.223,1.916,0.223c3.787,0,7.216-2.597,8.12-6.443C174.277,140.018,171.492,135.525,167.004,134.473z" fill="#FFFFFF"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M234.138,150.227l-33.566-7.877c-4.488-1.052-8.98,1.731-10.035,6.22c-1.053,4.489,1.732,8.981,6.22,10.034l33.566,7.877    c0.642,0.15,1.282,0.223,1.916,0.223c3.787,0,7.216-2.596,8.12-6.442C241.411,155.772,238.626,151.28,234.138,150.227z" fill="#FFFFFF"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M247.23,189.779l-76.055-17.847c-4.487-1.052-8.98,1.731-10.035,6.22c-1.053,4.489,1.732,8.981,6.22,10.034l67.928,15.94    l-54.804,233.553L53.627,407.911l54.803-233.553l25.824,6.059c4.489,1.053,8.98-1.732,10.034-6.22    c1.054-4.488-1.732-8.981-6.221-10.034l-33.95-7.966c-4.478-1.052-8.979,1.731-10.034,6.22L35.465,412.224    c-1.053,4.489,1.732,8.981,6.22,10.034l143.11,33.582c0.63,0.148,1.271,0.22,1.908,0.22c1.542,0,3.066-0.427,4.398-1.252    c1.882-1.167,3.223-3.033,3.73-5.188l58.619-249.807C254.502,195.324,251.717,190.832,247.23,189.779z" fill="#FFFFFF"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M204.405,283.961c-1.401-3.335-4.786-5.386-8.394-5.084l-31.233,2.619l-12.142-28.894c-1.4-3.335-4.794-5.387-8.394-5.084    c-3.603,0.302-6.604,2.891-7.43,6.412l-7.16,30.513l-31.233,2.62c-3.603,0.302-6.604,2.891-7.43,6.411    c-0.826,3.521,0.709,7.174,3.802,9.047l26.807,16.238l-7.16,30.514c-0.826,3.521,0.709,7.174,3.802,9.047    c1.337,0.81,2.834,1.208,4.323,1.208c1.958,0,3.902-0.687,5.456-2.028l23.727-20.477l26.808,16.239    c3.091,1.873,7.04,1.543,9.779-0.82c2.738-2.363,3.642-6.22,2.242-9.553l-12.142-28.895l23.728-20.477    C204.903,291.152,205.806,287.295,204.405,283.961z M160.694,314.869l4.539,10.801c0,0-10.02-6.069-10.022-6.071    c-6.933-4.2-13.896,4.373-18.647,8.474l2.676-11.404c0.826-3.521-0.709-7.174-3.802-9.047l-10.02-6.071    c0,0,11.658-0.977,11.674-0.978c8.105-0.68,8.676-11.727,10.105-17.817c0,0,4.528,10.775,4.538,10.799    c3.159,7.516,13.816,4.63,20.068,4.106C166.988,301.819,157.455,307.161,160.694,314.869z" fill="#FFFFFF"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M508.405,127.564c-7.115-4.925-9.523-14.443-5.604-22.14c1.896-3.722,0.747-8.273-2.687-10.651l-42.697-29.559    c-3.436-2.377-8.097-1.851-10.917,1.233c-3.271,3.583-7.951,5.638-12.836,5.638c-3.531,0-6.939-1.067-9.858-3.09    c-7.115-4.925-9.523-14.443-5.604-22.14c1.896-3.722,0.747-8.273-2.687-10.651L372.821,6.645    c-3.436-2.377-8.099-1.851-10.916,1.233c-3.272,3.583-7.953,5.636-12.837,5.638c-3.531,0-6.939-1.067-9.859-3.09    c-3.788-2.623-8.99-1.679-11.615,2.111l-48.265,69.714c-0.778-0.499-1.647-0.88-2.591-1.102l-50.557-11.862    c-4.066-0.955-8.213,1.245-9.705,5.147c-3.051,7.981-11.885,12.632-20.184,10.684c-8.422-1.977-14.151-9.95-13.324-18.548    c0.4-4.158-2.336-7.972-6.403-8.927l-50.556-11.863c-4.065-0.955-8.212,1.245-9.705,5.147    c-3.05,7.972-11.892,12.631-20.184,10.685c-4.483-1.053-8.979,1.732-10.034,6.22c0,0-12.5,53.268-12.511,53.316L0.223,433.747    c-1.053,4.489,1.732,8.981,6.22,10.034c8.424,1.977,14.152,9.951,13.325,18.548c-0.4,4.158,2.336,7.972,6.402,8.927l50.555,11.863    c4.074,0.955,8.213-1.244,9.705-5.146c7.029-18.385,35.387-11.661,33.51,7.863c-0.4,4.158,2.336,7.972,6.403,8.927l50.555,11.863    c4.017,0.939,8.23-1.289,9.705-5.148c2.549-6.668,9.057-11.149,16.195-11.149c3.682,0,6.845,1.572,10.295-0.565    c1.881-1.167,3.223-3.033,3.73-5.189l10.978-46.782c0,0,23.539,16.296,23.547,16.302c3.319,2.298,8.107,1.841,10.917-1.233    c3.271-3.583,7.951-5.636,12.835-5.636c3.531,0,6.94,1.069,9.86,3.09c3.791,2.623,8.99,1.677,11.615-2.113L510.515,139.18    C513.14,135.39,512.195,130.188,508.405,127.564z M226.923,368.429c0,0-12.581,53.615-12.582,53.619l-12.106,51.591    c-11.276,0.189-21.692,6.063-27.813,15.258l-37.974-8.911c-1.744-13.841-11.972-25.654-26.021-28.95    c-13.723-3.22-28.369,2.629-36.177,14.356l-37.973-8.911c-1.398-11.089-8.241-20.878-18.133-26.026l69.784-297.387l8.128,1.907    c0.641,0.15,1.281,0.223,1.914,0.223c3.787,0,7.216-2.597,8.12-6.443c1.053-4.489-1.732-8.981-6.221-10.034l-8.126-1.907    l8.927-38.043c11.276-0.189,21.691-6.063,27.813-15.258l37.974,8.911c1.744,13.841,11.971,25.654,26.02,28.952    c13.721,3.219,28.372-2.63,36.177-14.355l37.974,8.91c0.108,0.027,0.349,2.19,0.397,2.429c0.496,2.459,1.294,4.936,2.34,7.25    c3.139,6.953,8.614,12.832,15.395,16.351l-8.929,38.052l-8.128-1.907c-4.479-1.052-8.979,1.731-10.034,6.22    c-1.053,4.489,1.732,8.981,6.221,10.034l8.126,1.907l-13.276,56.578c0,0-1.45,6.18-1.451,6.184l-9.748,41.54    C247.54,280.566,226.923,368.426,226.923,368.429z M470.382,167.82l-6.864-4.753c-3.789-2.625-8.991-1.678-11.615,2.111    c-2.625,3.791-1.68,8.991,2.112,11.616l6.863,4.752L287.009,432.681c-3.784-1.42-7.806-2.154-11.913-2.154    c-7.047,0-13.882,2.192-19.562,6.16l-23.637-16.364l8.483-36.15l36.92,25.56c3.75,2.594,9.019,1.638,11.615-2.112l107.353-155.061    c2.625-3.791,1.68-8.991-2.11-11.616c-3.791-2.625-8.991-1.679-11.616,2.111L279.939,391.254l-35.461-24.551l16.277-69.365    l29.321-10.271l18.995,24.93c1.611,2.114,4.087,3.289,6.642,3.289c0.922,0,1.854-0.152,2.759-0.47    c3.413-1.195,5.669-4.452,5.586-8.069l-0.715-31.333l29.58-10.361c3.413-1.195,5.669-4.452,5.586-8.068    c-0.082-3.615-2.483-6.767-5.948-7.806l-30.021-9.005l-0.715-31.335c-0.082-3.616-2.483-6.767-5.948-7.806    c-3.465-1.039-7.203,0.272-9.262,3.245l-17.838,25.768l-11.43-3.428l21.491-91.583l10.519-15.194l107.133,74.171l-14.526,20.984    c-2.625,3.791-1.68,8.991,2.11,11.616c3.791,2.625,8.99,1.678,11.616-2.111c0,0,19.213-27.752,19.278-27.845    c2.582-3.73,1.603-9.044-2.11-11.616c0,0-120.644-83.524-120.861-83.675c-3.752-2.598-9.023-1.635-11.616,2.111l-3.623,5.234    c-0.1-0.027-0.196-0.062-0.297-0.086c-4.116-0.969-7.77-3.448-10.204-6.902c-0.018-0.025-0.033-0.052-0.051-0.078l19.201-27.734    c0,0,6.862,4.75,6.862,4.752c3.646,2.524,8.99,1.68,11.616-2.112c2.625-3.79,1.68-8.991-2.11-11.616l-6.863-4.752l22.241-32.125    c3.784,1.42,7.807,2.154,11.914,2.154c7.047,0,13.881-2.192,19.561-6.161l32.065,22.2c-3.446,13.518,1.741,28.256,13.607,36.471    c11.601,8.033,27.364,7.974,38.927-0.102l32.065,22.2c-2.76,10.83,0.021,22.446,7.338,30.86L470.382,167.82z M306.783,281.445    c0,0-7.098-9.314-7.101-9.32c-2.164-2.839-6.034-4-9.4-2.819l-11.056,3.872c3.639-5.257,11.529-12.768,6.445-19.443l-7.1-9.32    c0,0,11.211,3.363,11.223,3.366c7.824,2.346,12.336-7.687,15.929-12.876c0,0,0.267,11.701,0.267,11.712    c0.186,8.144,11.163,9.37,17.169,11.172l-11.057,3.872c-3.413,1.195-5.669,4.453-5.586,8.07L306.783,281.445z" fill="#FFFFFF"/>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg> </i></a>
            </p>
        </div>
    </div>
</section>
<section class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="sectionHeader"> Set in a great venue </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 location">

            <h3 class="flex-center">Boole Technology Centre, Lincoln</h3>

        </div>

    </div>

</section>
<section class="light container-fluid" >

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="sectionHeader"> With some great sponsors. </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 sponsors">
            <div class="col-md-12 sponsors">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="sponsor_image sponsor_image--w " style="background-image: url('images/Khaos.svg')"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="sponsor_image sponsor_image--w " style="background-image: url('images/EpixMedia.jpg')"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="sponsor_image " style="background-image: url('images/lsip.jpg')"></div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="sponsor_image " style="background-image: url('images/soc.png')"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="sponsor_image sponsor_image--w " style="background-image: url('images/Reg_NoStrap_Transparent.png')"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="sponsor_image sponsor_image--w statuscode" style="background-image: url('images/StatusCode.png')"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="sponsor_image sponsor_image--w adforesigh" style="background-image: url('images/adforesight-logo.jpg')"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="sponsor_image sponsor_image--w phpminds" style="background-image: url('images/phpminds.svg')"></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="sponsor_image digitalincoln" style="background-image: url('images/digitallincoln.jpg')"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<footer>
    <p class="center">Copyright LincolnHack 2017. &nbsp; LincolnHack is run by members of Digital Lincoln.
<br />LincolnHack follows the standard code of conduct as written by <a href="https://hackcodeofconduct.org/">hackcodeofconduct.org.</a> LincolnHack is a fun event - help us to keep it fun by behaving appropriately.
    </p>
   <div class="flex-center"><img src="images/ltech.jpg" alt="Lincolnshire Tech week"></div>
</footer>