<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LincolnHack</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
body {
  font-size: 16px;
}

.root {
  background-image: url("images/header-bg-2000x1151.jpg");
  background-size: cover;
  width: 100%;
  height: 900px;
  position: relative;
  color: #fff;
}

.subtitle {
  font-size: 27px;
  font-style: italic;
}

.maintitle {
    display: block;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 260%;
    border: 5px solid;
    margin: 20px auto;
    clear: both;
    max-width: 320px;
    font-weight: 100;
}

.h--1, .h--2 {
  font-size: 36px;
}
.h--3 {
  font-size: 28px;
}
.h--4, .h--5 {
  font-size: 20px;
}

  .h--1 {
    margin-top: 0;
  }
  .h--4 {
    color:#000; text-align: center; margin: 20px 0;
  }



  .xs-center {
    text-align: center;
  }

  .btn {
    background: none;
  }
  .btn-primary {
    background-color: #5e83dc;
    border-color: #5e83dc;
    color: #ffffff;
  }

  .wrapper {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .wrapper--grey {
    background-color: rgb(46, 46, 46);
    color: #fff;
  }



  .img-promo {
    margin: 40px auto 0 auto;
    width: 500px;
  }

  .arrow {
    background: rgba(0, 0, 0, 0.2);
border-radius: 3px;
color: #fff;
display: inline-block;
height: 46px;
outline-style: none;
position: relative;
text-decoration: none;
transition: all .3s ease-in-out;
width: 46px;
}
.arrow a {
  color: #fff;
  display: block;
  line-height: 46px;
}


.parallax {
      background-image: url(images/header-bg-2000x1151.jpg);
      min-height: 160px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      color: #fff;
      padding: 35px 0;
}

.parallax--boole {
  background-image: url(images/boole-overview-bg-2000x1731.jpg);
  color: #000;
}

.parallax--group {
  background-image: url(images/footer-bg-2000x1334.jpg);
  color: #000;
  padding: 170px;
}

  /* ----------------------------------------------------------------------------
       Sponsors
   ---------------------------------------------------------------------------- */
   .sponsors {
     font-size: 0;
     line-height: 0;
   }
   .sponsor {
     margin: 15px;
     display: inline-block;
   }
   .sponsor:not(.inline) {
     position: relative;
     vertical-align: top;
     border: 2px solid #e9e9e9;
   }
   .sponsor:not(.inline) img {
     -webkit-transform: translateX(-50%) translateY(-50%);
     -moz-transform: translateX(-50%) translateY(-50%);
     -o-transform: translateX(-50%) translateY(-50%);
     -ms-transform: translateX(-50%) translateY(-50%);
     transform: translateX(-50%) translateY(-50%);
     position: absolute;
     top: 50%;
     left: 50%;
     display: block;
     max-width: 80%;
     max-height: 80%;
   }
   .sponsor:not(.inline):not(.big) {
     width: 160px;
     height: 160px;
   }
   .sponsor.big {
     width: 255px;
     height: 255px;
   }
   .sponsor.inline {
     vertical-align: middle;
   }
   @media (max-width: 1199px) {
     .sponsor:not(.inline):not(.big) {
       margin: 8px;
       width: 140px;
       height: 140px;
     }
     .sponsor.big {
       margin: 15px;
       width: 205px;
       height: 205px;
     }
   }
   @media (max-width: 991px) {
     .sponsor:not(.inline):not(.big) {
       margin: 5px;
       width: 110px;
       height: 110px;
     }
     .sponsor.big {
       margin: 10px;
       width: 160px;
       height: 160px;
     }
   }
   @media (max-width: 767px) {
     .inline {
       margin: 10px;
     }
   }
   @media (max-width: 480px) {
     .sponsor:not(.inline):not(.big) {
       margin: 5px;
       width: 80px;
       height: 80px;
     }
     .sponsor.big {
       margin: 10px;
       width: 115px;
       height: 115px;
     }
   }


  @media (min-width: 768px) {
    .wrapper {
      margin: 70px 0;
    }
    .wrapper--no-margin {
      margin: 0;
    }
    .wrapper--no-padding {
      padding: 0;
    }
    .img-promo {
      margin: 0;
    }
}
</style>


  </head>
  <body>

<div class="root">
<div class="xs-center">
  <img src="images/lincoln-hack-imp.png" alt="Hack Imp">

  <span class="maintitle">Lincoln<strong>Hack</strong></span>

  <p class="subtitle">
    24 Hours Of Amazing Coding Fun!
    <br>In Lincolnshire
    <br>20TH &amp; 21ST OF MAY 2017
  </p>

  <div class="arrow">
    <a href="#js-what-is-lincolnHack">
      <i class="glyphicon glyphicon-chevron-down"></i>
    </a>
  </div>

</div>
</div>


<div class="wrapper">
<div class="container">
  <div class="row">
    <div class="col-sm-5" id="js-what-is-lincolnHack">
    <h3 class="h h--1">What is LincolnHack?</h3>
    <p>LincolnHack is a free 24 hour coding competition where teams of up to four people compete for fantastic prizes. They start with an idea and build it in to something. Hardware hacks, software hacks, API mash-ups, funny things, arty things, noisy things... whatever you decide to create, you’ve got 24 hours to do it!</p>
    <p>LincolnHack, now in it's second year, is being held to coincide with Lincolnshire Tech Week and moves to a new building. We plan to keep the same great atmosphere, fun and mix of people. From students to veterans all are welcome. If your interested in tech, willing to build something and enjoy meeting like-minded people, we're sure you will enjoy yourself!</p>
    <p>LincolnHack is a FREE event. There is no excuse not to come along...</p>
      <a class="btn btn-primary" href="https://www.eventbrite.com/e/lincolnhack-ii-tickets-33165401609">
        GET TICKETS NOW!
      </a>
    </div>
    <div class="col-sm-5 col-sm-offset-2">
      <img src="images/promo-1400x1415.png" alt="promo" class="img-responsive img-promo">
    </div>
  </div>
</div>
</div>

<div class="wrapper">
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <img src="images/promo-img-1400x1403.png" alt="promo" class="img-responsive img-promo">
    </div>
    <div class="col-sm-5 col-sm-offset-2">
      <h3 class="h h--1">When and Where?</h3>
      <p>LincolnHack is being hosted in the brand new <a href="http://www.lincolnsciencepark.co.uk/boole-technology-centre">Boole Technology Centre</a>, within the grounds of Lincoln Science and Innovation Park.</p>
      <p>The Boole Technology Centre is named after George Boole, who was born in Lincoln in 1815. This self-taught son of a Boot Maker revolutionised mathematics, not least by defining the algebraic definition of logic. In doing so, he established the rules of binary code and became the grandfather of the digital age</p>
      <a class="btn btn-primary" href="https://www.eventbrite.com/e/lincolnhack-ii-tickets-33165401609">
        GET TICKETS NOW!
      </a>
    </div>
  </div>
</div>
</div>


<div class="parallax parallax--boole">
  <h1 class="h h--1 xs-center">Boole Technology Centre</h1>
  <p class="xs-center">
    How to find us
  </p>
</div>


<div class="wrapper wrapper--grey wrapper--no-margin">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <address>
          Boole Technology Centre,<br>
          Beevor St,<br>
          Lincoln,<br>
          LN6 7DJ
        </address>

          <p>LincolnHack Starts:<br>
          10am, May 20th, 2017</p>

          <p>LincolnHack Ends:<br>
          5:30pm (ish), May 21st 2017</p>

          <p>Email: <a href="mailto:hello@lincolnhack.org">hello@lincolnhack.org</a>.</p>
      </div>
      <div class="col-sm-5 col-sm-offset-2">
        <iframe frameborder="0" style="border: none; width: 100%; height:235px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&q=place_id:ChIJzz20p9BaeEgRC8eKyusvgcQ"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="parallax">
  <h1 class="h h--1 xs-center">Schedule</h1>
  <p class="xs-center">
    Subject to change...
  </p>
</div>


<div class="wrapper wrapper--no-padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">

<table class="table">
                      <tbody>
                        <tr>
                          <td colspan="2" style="border-top: none">
                            <h5 class="h h--5">Saturday, May 20th </h5>
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
                              <h5 class="h h--5">Sunday, May 21st </h5>
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
                            <td>Hacking Ends  &amp; Lunch</td>
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



<div class="parallax">
  <h1 class="h h--1 xs-center">Sponsors</h1>
  <p class="xs-center">
    LincolnHack would not be possible without the generosity of our sponsors
  </p>
</div>


<div class="wrapper">

  <div class="container">
  <div class="row">



  <h4 class="h h--4">Gold Sponsors</h4>
  			<div class="sponsors">
  				<div class="sponsor big">
            <a href="https://www.epixmedia.co.uk/" target="_blank">
              <img src="images/EpixMedia.jpg" alt="EpixMedia">
            </a>
          </div>
  				<div class="sponsor big">
            <a href="https://www.khaoscontrol.com/" target="_blank">
              <img src="images/KhaosControl_Red-Black.jpg" alt="KhaosControl">
            </a>
          </div>
  			</div>
        <h4 class="h h--4">Logo Sponsors</h4>

  			<div class="sponsors">
  				<div class="sponsor big">
            <a href="https://phpminds.org/" target="_blank">
              <img src="images/phpminds.svg" alt="PHP Minds">
            </a>
          </div>
  				<div class="sponsor big">
            <a href="https://cooperpress.com/" target="_blank">
            <img src="images/StatusCode.png" alt="StatusCode">
            </a>
          </div>
  				<div class="sponsor big">
            <a href="http://adforesight.com/" target="_blank">
            <img src="images/adforesight-logo.jpg" alt="Adforesight">
            </a>
          </div>
          <div class="sponsor big">
            <a href="https://www.pagetiger.com/" target="_blank">
            <img src="images/page-tiger.png" alt="Page Tiger">
            </a>
          </div>
  			</div>


  <h4 class="h h--4">Partners</h4>
  			<div class="sponsors">
  				<div class="sponsor big">
            <a href="http://www.lincolnsciencepark.co.uk/" target="_blank">
            <img src="images/lsip.jpg" alt="Lincoln Science and Innovation Park">
          </a>
          </div>
  				<div class="sponsor big">
            <a href="http://www.lincoln.ac.uk/home/socs/" target="_blank">
              <img src="images/soc.png" alt="University of Lincoln School of Computer Science">
            </a>
          </div>
          <div class="sponsor big">
            <a href="https://www.meetup.com/digitallincoln/" target="_blank">
              <img src="images/digitallincoln.jpg" alt="Digital Lincoln">
            </a>
          </div>

          <div class="sponsor big">
            <a href="http://lincolnshire.tech/" target="_blank">
              <img src="images/ltech.jpg" alt="Digital Lincoln">
            </a>
          </div>

  			</div>

  		</div>
    </div>

</div>



<div class="parallax parallax--boole">
  <h1 class="h h--1 xs-center">FAQ's</h1>
</div>


<div class="wrapper wrapper--no-padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="panel-group" id="accordion" role="tablist">

          <div class="panel panel-default">
            <div class="panel-heading" role="tab">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#c1">
                  Parking
                </a>
              </h4>
            </div>
            <div id="c1" class="panel-collapse collapse in" role="tabpanel">
              <div class="panel-body">
                On site parking is available. Where possible, please car share.
                Pay and Display parking is available within a 20 minute walk.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c2">
                  Tickets
                </a>
              </h4>
            </div>
            <div id="c2" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                You will need to provide a ticket for entry. No ticket, no entry.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c3">
                  Can I choose my team
                </a>
              </h4>
            </div>
            <div id="c3" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                Yes. You can team up with friends, or other hackers on the day. You can also hack solo.
                Only one prize per team member per challenge.
                Each challenge has a maximum of four prizes.
                A Maximum of 4 members per team (you can have more than 4 - but there are only 4 prizes…)
              </div>
            </div>
          </div>


        <div class="panel panel-default">
          <div class="panel-heading" role="tab">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c4" >
                I don't have a team
              </a>
            </h4>
          </div>
          <div id="c4" class="panel-collapse collapse" role="tabpanel">
            <div class="panel-body">
              We will help you find one on the day.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" >
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c5">
                Can I enter more than one challenge?
              </a>
            </h4>
          </div>
          <div id="c5" class="panel-collapse collapse" role="tabpanel" >
            <div class="panel-body">
              You can enter as many as you like… but remember, you only have 24 hours!
              You can also win more than one challenge.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" >
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c6" >
                What are the challenges?
              </a>
            </h4>
          </div>
          <div id="c6" class="panel-collapse collapse" role="tabpanel" >
            <div class="panel-body">
              You’ll find out on the day… ;)
            </div>
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading" role="tab" >
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c7" >
                What are the prizes?
              </a>
            </h4>
          </div>
          <div id="c7" class="panel-collapse collapse" role="tabpanel" >
            <div class="panel-body">
              You’ll find out on the day :D
            </div>
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading" role="tab" >
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c8" >
                Who owns my hack?
              </a>
            </h4>
          </div>
          <div id="c8" class="panel-collapse collapse" role="tabpanel" >
            <div class="panel-body">
              Anything created remains the property of the hacker (author). LincolnHack and its sponsors have no ownership over anything you create.
            </div>
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading" role="tab" >
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c9" >
                What is for dinner?
              </a>
            </h4>
          </div>
          <div id="c9" class="panel-collapse collapse" role="tabpanel" >
            <div class="panel-body">
              TBA - all catering is provided by Sam Owen of <a href="http://www.saltedorange.co.uk/" target="_blank">Salted Orange</a>. The same great chef from last year.</div>
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading" role="tab" >
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#c10" >
                Am I expecte to stay up all night?
              </a>
            </h4>
          </div>
          <div id="c10" class="panel-collapse collapse" role="tabpanel" >
            <div class="panel-body">
              No… indeed, we strongly advise you get some sleep and stay hydrated. <br>You’re allowed to go home. Come and go as you please. Rember to take regular breaks. Rest is important.
          </div>
        </div>

        </div>

        </div>



</div>
</div>
</div>
</div>







<div class="parallax parallax--group xs-center">
</div>



<div class="wrapper wrapper--grey wrapper--no-margin">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
<p class="xs-center">
  Copyright LincolnHack 2017. LincolnHack is run by members of <a href="https://www.meetup.com/digitallincoln/">Digital Lincoln.</a><br>
  LincolnHack follows the standard code of conduct as written by <a href="https://hackcodeofconduct.org/">hackcodeofconduct.org.</a><br>
  LincolnHack is a fun event - help us to keep it fun by behaving appropriately.
</p>


</div>
</div>
</div>
</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



  </body>
</html>
