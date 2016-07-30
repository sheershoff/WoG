<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/main.css" rel="stylesheet">
    <link href="{{asset('/css/castom.css')}}" rel="stylesheet">
    <link href="{{asset('/css/register.css')}}" rel="stylesheet">
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/font-style.css" rel="stylesheet">
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/flexslider.css" rel="stylesheet">
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/jquery-1.10.2.min.js"></script>
        
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/bootstrap.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/lineandbars.js"></script>
    
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/dash-charts.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/noty/layouts/top.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://www.prepbootstrap.com/Content/js/single-page-admin/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img style=" margin-top: -7px; " src="{{asset('img/logo30.png')}}" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/"><i class="icon-home icon-white"></i> WOG</a></li>                            
              <li><a href="/personal-data"><i class="icon-th icon-white"></i> Персонаж</a></li>
<!--               <li><a href="login.html"><i class="icon-lock icon-white"></i> </a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li> -->

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

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
      			<p>© 2016 ПАО «МегаФон»</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
</body></html>