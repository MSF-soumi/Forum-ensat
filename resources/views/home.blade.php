@extends('layouts.app')

@section('content')
<@guest
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
@endsection
