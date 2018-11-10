<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LincolnHack</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <style>
            html, body {
                background: #BE93C5; /* fallback for old browsers */
                background: -webkit-linear-gradient(to left, #BE93C5 , #7BC6CC); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #BE93C5 , #7BC6CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }
            .message{
                padding:0.3em;
                background: firebrick;
                color: white;
                font-size: 135%;
                text-align: center;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                width: 100%;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 3em;
                margin: auto;
                
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img{
                margin-top: 3%;
            }
        </style>
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
    </head>
    <body></body>
    <div id="app">
    <announcer></announcer>
        <div class="flex-center position-ref full-height" >

            <div class="content">

                <div class="flex-center">
                    <img src="../../images/lincoln-hack-imp.png" alt="lincolnhack" />
                </div>
                <div class="title m-b-md">
                    <countdown date="Nov 11, 2018 12:00 GMT"></countdown>
                </div>
            </div>
        </div>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
