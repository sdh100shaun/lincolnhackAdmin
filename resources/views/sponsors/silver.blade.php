@include('partials.head')
<div class="container-fluid sponsor-page">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center"><strong>Silver Sponsors</strong></h1>
                <hr/>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($sponsor as $sponsors)
            <div class="row silver-sponsor" id="{{$sponsors->name}}">
                <div class="col-sm-5 col-sm-offset-1">
                    <div>
                        <img class="img-responsive center-block"
                             src="../../images/assets/sponsors/{{$sponsors->name}}.svg" alt="{{$sponsors->name}}"
                             width="50%" height="50%"/>
                    </div>
                </div>

                <div class="col-sm-5 col-sm-offset-1">

                    <p> {{$sponsors->content}}</p>
                    <p> Find out more <a href="{{$sponsors->url}}" title="{{$sponsors->name}}">{{$sponsors->url}}</a>
                    </p>

                </div>

            </div>


            <hr/>
        @endforeach

        <div class="row ">
            <div class="col-sm-12">
                <div class="col-sm-6">
                   <br />
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <p>Want to sponsor Lincolnhack - contact the team on <a href="mailto:hello@lincolnhack.org">hello@lincolnhack.org</a>
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
@include('partials.footer')