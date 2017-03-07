<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{{ asset('/css/bootstrap.min.css')}}}" rel="stylesheet">
        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
        <link href="{{{ asset('/css/eventuser.css') }}}" rel="stylesheet">
        <link href="{{{ asset('/css/renungan.css') }}}" rel="stylesheet">
        <!-- Bootstrap Dropdown Hover CSS -->
        <link href="{{{ asset('/css/animate.min.css') }}}" rel="stylesheet">
        <link href="{{{ asset('/css/bootstrap-dropdownhover.min.css') }}}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->    
        <script src="{{{ asset('/js/bootstrap.min.js') }}}"></script>
        <script src="{{{ asset('/js/bootstrap-dropdownhover.min.js') }}}"></script>
        <script src="{{{ asset('/js/animasi.js') }}}"></script>


    </head>
    <body>
        
        <div class="container">
          <div class="navbar navbar-default navbar-fixed-top">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <a href="/" class="navbar-brand img-responsive">kmk Gunadarma</a>

            <div class="collapse navbar-collapse collapse bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
              <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::is('user/event') ? 'active' : '' }}"><a href="/user/event">Event</a></li>
                <li class="{{ Request::is('user/renungan') ? 'active' : '' }}"><a href="/user/renungan">Renungan</a></li>
                <li class="dropdown">
                  <a href="#dropdown-about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-huspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                  <ul class="dropdown-menu" id="dropdown-about">
                    <li><a href="#">Sekilas KMK Gunadarma</a></li>
                    <li><a href="#">Servant of KMK</a></li>
                    <!--li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li-->
                  </ul>
                </li>
                <li><a href="">Contact Us</a></li> 
              </ul>
            </div>
          </div>           
        </div>

      @yield('konten')

      <footer class="clearfix">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <nav class="tabel">
                <ul class="footer-links">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </footer>
    </body>
</html>
