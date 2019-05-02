
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        

        <!-- Styles -->
        <style>
            .container-fluid, body{
        
                /* text-align: center; */
                font-size: 17px;
                background-color: #CCFFCC!important;
                padding: 0px;
                margin: 0px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                
            }
            

        </style>
        <nav class="navbar bg-primary navbar-expand-lg fixed-top" s>
            
            <a class="navbar-brand"><h2 style="color:white">
            <img src="images/logo.jpg"  style="width:45px;height:45px;">
                SmartAcademy
                </h2>
            </a>
            <button class="navbar-toggler"
            type="button" data-toggle="collapse"
            data-target="#navbarContent" 
            aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  mr-3 mt-2">
                    </li>
                    <li class="nav-item  mr-5">
                        <a style="color:black" href="{{ url('/project') }}">Home</a>
                    </li>
                    <li class="nav-item  mr-5">
                        <a style="color:black" href="{{ url('/register') }}">Register</a>
                    </li>
                    <li class="nav-item  mr-5">
                        <a style="color:black" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item  mr-5">
                        <a style="color:black" href="{{ url('/all') }}">Members</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <body>
    </body>
</html>
