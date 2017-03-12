@extends('layouts.form')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Attendee Information</div>

                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p>Just some things we need to know ahead of the event.</p>
                        <form method="post" action="{{ route('attendee.store') }}">

                            {!! csrf_field() !!}
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="attendeeId">Email</label>
                                <div class="col-md-6">
                                    <input id="attendeeId" value="{{old("attendeeId")}}" name="attendeeId" type="email" placeholder="Your email" class="form-control input-md" required="required">
                                    <span class="help-block">Will get you into <a href="">Slack</a> and <a href="">Hackbot</a>.</span>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="tshirt">Choose your t-shirt size</label>
                                <div class="col-md-6">
                                    <select id="tshirt" name="tshirt" class="form-control">
                                        <option value="">Choose from </option>
                                        @foreach ($tshirtsizes as $tshirt)
                                            <option value="{{$tshirt->size}}">{{$tshirt->description}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">Super snug t-shirts provided by <a href="http://www.digitallincoln.co.uk/" target="_blank">Digital Lincoln</a></span>

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="dietaryRequirements">Any dietary requirements ?</label>
                                <div class="col-md-6">
                                    <select id="dietaryRequirements" name="dietaryRequirements" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="none">None</option>
                                        <option value="veggie">Vegetarian</option>
                                        <option value="vegan">Vegan</option>
                                        <option value="glutenfree">Gluten Free</option>
                                    </select>
                                    <span class="help-block">Satisfied by our caterer <a href="http://www.saltedorange.co.uk/" target="_blank">Salted Orange</a></span>

                                </div>
                            </div>

                        </fieldset>
                            <input type="submit" class="btn btn-success pull-right" value="send" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection