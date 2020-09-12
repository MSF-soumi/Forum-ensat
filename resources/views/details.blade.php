<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORUM ENSAT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet"> 
        <link href="/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>
    <div class="r1">Posts</div>
                    <a href="{{ route('home') }}" class="actif">HOME</a>
                    @auth
                    <a href="{{url('/p')}}">ADD POST</a>
                    @endauth
                    <br><br>
                    <div class="post">
                        <h1>{{ $post->titre }}</h1>
                        <p>{{ $post->contenu }}</p>

                        <div>Created by: {{ $post->user->name }}</div> 
                    </div>
                    

                    <div class="comments">
                    @auth
                    <form action="/p/{{$post->ID_P}}/comments" method="POST" id="comments">
                        @csrf
                                    <h5>Leave a comment</h5>
                                    <textarea  class="form-control " name="body" placeholder="Write your comment here" row="10"></textarea>
                                    <button type="submit" class="Bout">Envoyer !</button>
                    </form> 
                    @endauth

                    <div id="list_comment" >
                        
                        <h5> The list of comments  : </h5>
                        
                    @foreach($post->comments  as $comment)
                     <table>
                         <tr>
                             <td ><b>Comment :</b> </td>
                             <td><b>Commented by:</b></td>
                         </tr>
                         <tr>
                        <td>{{ $comment->body }}</td>

                        <td> {{ $comment->user->name }}</td>
                         </tr>
                    </table>
                    @endforeach
                </di>

                    
                    </div>




    
    </body>
</html>