@extends('layouts.site')


<header class="container-fluid">
    @if (Route::has('login'))
        <div class="top-right links pull-right">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Admin</a>
            @endif
        </div>
    @endif


    <div class="row  col-md-12 container-fluid">
        <div class="jumbotron no-background flex-center position-ref full-height">


            <img src="../../images/lincoln-hack-imp.png" alt="lincolnhack"/>

        </div>
        <div class="flex-center position-ref full-height">
            <h1>Lincoln<strong>Hack</strong></h1>
        </div>

            <h2>24 Hours Of Amazing Coding Fun! in the capital of Lincolnshire</h2>
            <h3>20th and 21st May 2017</h3>
    </div>

</header>
</div>
</body>
</html>
