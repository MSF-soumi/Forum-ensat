<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORUM ENSAT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet"> 
        <link href="assets/css/HomeStyle.css" rel="stylesheet">

    </head>
    <body>
        @guest
            <div id="container">
                <div id="E1">
                    <img src="assets/ensat.jpg">
                    <h1> WE GO FURTHER</h1>
                    <h3>when we go together.</h3>
                    <button>Join the team</button>
                </div>
                <img src="assets/student.png">
            </div>
        @else
            <nav>
                <img src="assets/ensat.jpg">
                <ul>
                    <li>Profil</li>
                    <li>Contact</li>
                    <li>LOG OUT</li>
                </ul>
            </nav>
        @endguest 

        <div id= "dash">
            <table>
                <tr><th>DASHBOARD</th></tr>
                <tr>
                    <td><a href="#">titre</a></td>
                    <td>stars </td>
                </tr>
            </table>


        </div>
    </body>
</html>