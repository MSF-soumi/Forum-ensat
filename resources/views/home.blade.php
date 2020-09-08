<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORUM ENSAT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet"> 
        <link href="assets/css/HomeStyle.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>
        @guest
            <div id="container">
                <div id="E1">
                    <img src="assets/ensat.jpg">
                    <h1> WE GO FURTHER</h1>
                    <h3>when we go together.</h3>
                    <div class="links">
                        <a  href="{{ route('register') }}">Join the team</a>
                        <br>
                        <a  href="{{ route('login') }}">LOG IN</a>
                    </div>
                </div>
                <img src="assets/student.png">
            </div>

        @endguest 
        @auth
        <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ route('home') }}">ENSAT FORUM</a>
              <a href="{{ route('home') }}" class="actif">HOME</a>
              <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" >
               @csrf </form>
            </div>           
              <form class="navbar-form navbar-left pull-right">
                <input type="text" class="form-group form-control" placeholder="Recherche">
              </form>
            
          </nav>
          @endauth
        
        </br>
        
        <div id= "dash">
            <table>
                <tr>
                    <th style="font-size: 40px; " >DASHBOARD</th>
                    @auth
                    <th><a href="{{url('/p')}}">ADD POST</a></th>
                    @endauth
                </tr>
                <tr>
                @foreach($posts  as $post)
                    <tr>
                    <td><a href="#">{{ $post->titre }}</a></td>

                    <td>Created by: {{ $post->user->name }}</td>
                    </tr>
                @endforeach
               
            </table>


        </div>
    
    </body>
</html>