<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WELCOME</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    @yield('css')
</head>

<body>

<nav class="navbar navbar-inverse">
   <div class="container-fluid">
      <div class="navbar-header">
         <a class="navbar-brand" href="#">CMS</a>
      </div>
      <ul class="nav navbar-nav">
         <li class="active"><a href="{{ route('home') }}">Blog</a></li>
         <li >
           <a class="nav-link pull-right" href="{{ route('admin.posts.index') }}">@if(Auth::check()) backend @endif</a>
         </li>
      </ul>
   </div>
</nav>
<div class="container">
  <main role="main">

      @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

      @yield('content')
  </main>

</div> <!-- /container -->
<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>
