<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/production/images/favicon.ico" type="image/ico" />

    <title> @yield('title')</title>

    @include('partials._header')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            @include('partials._sidebar')
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          @include('partials._topnav')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="" role="main">
          @yield('content')
        </div>
        
      </div>
          </div>
          <br />
        <!-- footer content -->
        <footer>
          @include('partials._footer')
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
    @include('partials._scripts')
  </body>
</html>
