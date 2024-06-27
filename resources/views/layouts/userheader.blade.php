

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travelia | Plan Your Next Adventure</title>
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css"
      rel="stylesheet" />
  </head>

  <body>
    <nav class="nav-bar" id="navbar">
      <div class="content">
        <div class="site-logo">
          <a href="#" class="logo-link">Travelia</a>
        </div>

        <ul class="navigation">
          <li class="link"><a href="#home">Home</a></li>
          <li class="link"><a href="#about">About Us</a></li>
          <li class="link"><a href="#discover">Discover</a></li>
          <li class="link"><a href="#blog">Blog</a></li>
        
        @guest
        <li class="link">
          <a clas s="nav-link" href="{{ route('view.travel') }}">famous-places</a>
      </li>
        <li class="link">
            <a   href="login" >Login</a>
        </li>
        <li class="link">
            <a  href="register" >Register</a>
        </li>
        @endguest
        @auth
       
        <li class="link">
            <a class="nav-link" href="#">
                <div style="color: #f35405;">  {{ Auth::user()->name }} </div>
            </a>
        </li>
        <li class="link" >
        <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                </form>
            </div>
            @endauth

        <label for="bars" class="icon-bars"
          ><i class="ri-bar-chart-2-fill"></i
        ></label>
      </div>
    </nav>