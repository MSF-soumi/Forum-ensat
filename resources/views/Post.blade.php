<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORUM ENSAT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet"> 
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>
    <div class="r1">Post</div>
    
          <form action="{{ route('Post.create') }}" method="POST">
          @csrf
                        <h1 >Add Your Post!</h1>
                        
                        <input type="text" name="titre"  placeholder="Titre de votre poste">
 
                        <textarea  name="contenu" placeholder="Détailler votre question"></textarea>
                        <button type="submit" class="Bout">Envoyer !</button>
                </form>


    
    </body>
</html>