@extends('/user/navbaruser')
@section('konten')

<div class="container" id="event-container">
  <header class="clearfix">
      <h1 class="text-center" id="header-event">EVENT</h1>
  </header>  

  <div class="row" id="eventuser">
    <div class="col-xs-6 col-md-4">
      <img src="http://placehold.it/350x250" class="img-responsive">
    </div>

    <div class="col-md-8">
      <h3>Judul 1</h3>
      <small>14 November 2016</small>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="btn-readmore">
        <button type="button" class="btn-lg btn btn-primary pull-right">
          <a href="#">Read More</a>
        </button>
      </div>
    </div>
  </div>
</div>

@endsection