<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WoG</title>
        <meta name="description" content="WoG - работай играя">
        <meta name="author" content="Vladimir.Khonin">

        <!-- Fonts -->
        <!-- link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous" -->
        <!-- link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" -->
        <link href="{{asset('/css/font-style.css')}}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('/css/all.css') }}" rel="stylesheet">
        <link href="{{asset('/css/wog.css') }}" rel="stylesheet">
        <!-- JavaScripts -->
        <script type="text/javascript" src="{{asset('/js/jquery.js') }}"></script>
    </head>
    <body>
        <!-- NAVIGATION MENU navbar navbar-default navbar-static-top-->
        <nav class="navbar-nav navbar-inverse navbar-fixed-top">
            <div class="container ">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed dropdown" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">WoG</span>
                    </button>

                    <!-- Branding Image -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img style=" margin-top: -7px; " src="{{asset('img/logo30.png')}}" alt="WoG">
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/gantt/index.html">gantt</a></li>
                                <li><a href="/gantt/toweek.html">недельные задачи</a></li>
                                <li><a href="/skills/">Скиллы</a></li>
                                @if (Auth::guest())
                                @else
                                    <li><a href="/phpinfo.php">phpinfo.php</a></li>
                                    <li><a href="/i/adminer.php?pgsql=localhost&username=wog&db=wog&ns=wog">Adminer</a></li>
                                    <li><a href="/jira-team-boadr/">JiraTeamBoadr</a></li>
                                @endif
                            </ul>
                        </li>
                        <li><a href="/home"><i class="icon-th icon-white"></i> WoG</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/achievements') }}">Достижения</a></li>
                                <li><a href="{{ url('/administrator') }}">Настройка</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        @else
                        <li><a href="/shop">Shop</a></li>
                        @endif
                        <li><a href="https://megawiki.megafon.ru/display/WOG">WiKi</a></li>
                        <li class="dropdown">
                            <a href="/i/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Рейтинги <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/rating/xp">Опыт</a></li>
                                <li><a href="/rating/team">Team</a></li>
                                <li><a href="/rating/gold">Gold</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        @if (Session::has('message'))
        <div class="row">
            <div class=”col-md-12">
                <div class=”alert alert-info”>{{ Session::get('message') }}</div>
            </div>
        </div><!--/row -->
        @endif

        <div class="container main-wog">

            <!-- FIRST ROW OF BLOCKS -->
            <div class="row">


                @yield('content')


            </div><!--/row -->



        </div> <!-- /container -->


        <div id="footerwrap">
            <footer class="clearfix"></footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <!-- <p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/logo.png" alt=""></p> -->
                        <p> {{ shell_exec("git log -1 --pretty=format:'%h - %s (%ci)' --abbrev-commit `git merge-base local-dev dev`") }}
                            © V.Khonin, R.Revel &  2016 ПАО «МегаФон»</p>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /footerwrap -->

        <!-- JavaScripts -->
        <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/all.js') }}"></script>
    </body>
</html>
