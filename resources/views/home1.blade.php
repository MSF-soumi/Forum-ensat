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
                <button ><a class="boutton" href="{{ route('register') }}">Join the team</a></button>
                </div>
                <img src="assets/student.png">
            </div>
        @else
            <nav class="navbar-expand navbar-light ">
                <img src="assets/ensat.jpg">
                <ul>
                    <li><a href="">Profil</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">LOG OUT</a></li>
                </ul>
            </nav>
        @endguest 
        
        </br>
        
        <div id= "dash">
            <table>
                <tr><th style="font-size: 40px; ">DASHBOARD</th></tr>
                <tr>
                    <td><a href="#">titre</a></td>
                    <td>stars </td>
                </tr>
                <tr>
                    <td><a href="#">titre</a></td>
                    <td>stars </td>
                </tr>
                <tr>
                    <td><a href="#">titre</a></td>
                    <td>stars </td>
                </tr>
            </table>


        </div>
    
    </body>
</html>