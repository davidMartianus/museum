<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset ('/css/bootstrap.min.css' )}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin-event.css') }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--link href="{{ asset('/summernote-master/summernote.css')}}" rel="stylesheet"-->

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <!--side menu-->
        <div class="col-md-2 display-table-cell valign-top" id="side-menu">
          <img src="http://placehold.it/150x150" class="img-responsive center-block hidden-xs" id="logo-admin">
          <h1 class="hidden-xs">Admin</h1>
          <ul>
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
              <a href="/admin">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span class="hidden-xs">Dashboard</span>
              </a>
            </li>

            <li class="link">
              <a href="#collapse-post" data-toggle="collapse" aria-control="collapse-post">
                <span class="fa fa-map-marker" aria-hidden="true"></span>
                <span class="hidden-xs">Lokasi</span>
              </a>

              <ul class="collapse collapseable" id="collapse-post">
                <li class="{{ Request::is('admin.addLoc') ? 'active' : '' }}"><a href="/admin/add-location">Tambah Lokasi</a></li>
                <li class="{{ Request::is('admin.listLoc') ? 'active' : '' }}"><a href="/admin/show-location">List Lokasi</a></li>
              </ul>
            </li>

            <li class="link">
              <a href="#collapse-arc" data-toggle="collapse" aria-control="collapse-arc">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span class="hidden-xs">Peninggalan Sejarah</span>
              </a>

              <ul class="collapse collapseable" id="collapse-arc">
                <li class="{{ Request::is('admin.addArc') ? 'active' : '' }}"><a href="/admin/add-peninggalan">Tambah Peninggalan Sejarah</a></li>
                <li class="{{ Request::is('admin.showArc') ? 'active' : '' }}"><a href="/admin/show-peninggalan">List Peninggalan Sejarah</a></li>
              </ul>
            </li>

            <li class="{{ Request::is('admin/pengurus') ? 'active' : '' }}">
              <a href="/admin/pengurus">
                <span class="fa fa-comments" aria-hidden="true"></span>
                <span class="hidden-xs">Komentar</span>
              </a>
            </li>
          </ul>
        </div>
        <!--end side menu-->

        <!--content-->
        <div class="col-md-10 display-table-cell valign-top">
          <div class="row">            
          <header id="nav-header" class="clearfix">
            <!--div class="col-md-5 hidden-xs">
              <input type="text" id="header-search-field" name="cari" placeholder="Cari...">
            </div-->

            <div class="" id="header-welcome">
              <ul class="pull-right">
                <li class="hidden-xs">Welcome to Your Administration Area</li>          
                <li>
                  <a href="#" class="logout">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    Log Out
                  </a>
                </li>
              </ul>
            </div>
          </header>
          </div>
          @yield('content')
          <div class="row">
            <footer id="admin-footer" class="clearfix">
              <div class="pull-left"><b>Copyright</b>&copy; 2016</div>
              <div class="pull-right">Admin System</div>
            </footer>
          </div>
        </div>  
        <!--end content-->
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset ('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('/js/admin.js') }}"></script>
    <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCxskUS5qjnsZeAvKc8tViJUWx66Z8Pgkc&sensor=false&callback=addMap" type="text/javascript" async defer></script>
    <script src="{{ asset ('/js/locPick.js') }}"></script>
    <!--script src="{{ asset('/summernote-master/dist/summernote.min.js')}}"></script-->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#summernote').summernote({
          height: 335
        });
      });
    </script>
  </body>
</html>