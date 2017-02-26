<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="csrf_token" content="{{csrf_token()}}">
      <title>welcome</title>
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
               <li class="active"><a href="{{ route('home') }}">home</a></li>
               <li ><a href="{{ route('admin.posts.index') }}">Posts</a></li>
               <li ><a href="{{ route('admin.categories.index') }}">Categories</a></li>
               <li>
                  <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                  <span class="glyphicon glyphicon-log-in"></span> Logout
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container">
         @if (session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
         @endif
         @yield('content')
      </div>
      <!-- /.container -->
      <script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      @yield('js')
   </body>
</html>
