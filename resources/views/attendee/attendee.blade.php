@include('partials.head')
<div class="container-fluid sponsor-page">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <h1 class="text-center"><strong>Attendee Information</strong></h1>
                <hr/>
                <p>Each attendee will need to fill out this information. If you have booked multiple
                tickets please enter the details for each person.</p>
                <p>This is your confirmation of attendance. It is important to complete this otherwise we may not be able to register you.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading"></div>

                    <div class="panel-body attendee-form">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p></p>
                        <form method="post" action="{{ route('attendee.store') }}" class="form-horizontal"
                              id="attendee">

                            {!! csrf_field() !!}
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstName">First Name</label>
                                    <div class="col-md-6">
                                        <input id="firstName" value="{{old("firstName")}}" name="firstName" type="text"
                                               placeholder="Your first name" class="form-control input-md"
                                               required="required">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="lastName">Last Name</label>
                                    <div class="col-md-6">
                                        <input id="lastName" value="{{old("lastName")}}" name="lastName" type="text"
                                               placeholder="Your last name" class="form-control input-md"
                                               required="required">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="attendeeId">Email</label>
                                    <div class="col-md-6">
                                        <input id="attendeeId" value="{{old("attendeeId")}}" name="attendeeId"
                                               type="email" placeholder="Your email" class="form-control input-md"
                                               required="required">
                                        <span class="help-block">Will get you into <a href="">Slack</a> and <a href="">Hackbot</a>.</span>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="attendee-contact">A contact
                                        number (in case of emergency) </label>
                                    <div class="col-md-6">
                                        <input id="attendee-contact" value="{{old("attendee-contact")}}"
                                               name="attendee-contact"
                                               type="text" placeholder="Your emergency contact number"
                                               class="form-control input-md"
                                               required="required">
                                        <span class="help-block">This number is not shared and only for health and safety reasons.</span>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="tshirt">Choose your t-shirt size</label>
                                    <div class="col-md-6">
                                        <select id="tshirt" name="tshirt" class="form-control">
                                            <option value="">Choose from</option>
                                            @foreach ($tshirtsizes as $tshirt)
                                                <option value="{{$tshirt->size}}">{{$tshirt->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="help-block">Super snug t-shirts provided by <a
                                                    href="http://www.digitallincoln.co.uk/" target="_blank">Digital Lincoln</a></span>

                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="dietaryRequirements">Any dietary
                                        requirements ?</label>
                                    <div class="col-md-6">
                                        <select id="dietaryRequirements" name="dietaryRequirements"
                                                class="form-control">
                                            <option value="">Choose</option>
                                            <option value="none">None</option>
                                            <option value="veggie">Vegetarian</option>
                                            <option value="vegan">Vegan</option>
                                            <option value="glutenfree">Gluten Free</option>
                                        </select>
                                        <span class="help-block">Satisfied by our caterer <a
                                                    href="http://www.saltedorange.co.uk/"
                                                    target="_blank">Salted Orange</a></span>

                                    </div>
                                </div>

                            </fieldset>
                            <input type="submit" class="btn btn-primary pull-right" value="send"/>
                            <p> By submitting this form and attending the event you are agreeing to our <a
                                        href="http://hackcodeofconduct.org">code of conduct</a></p>
                        </form>
                    <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')