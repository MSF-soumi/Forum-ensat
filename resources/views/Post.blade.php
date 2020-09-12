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
<div class="form-group row">
    <label for="titre" class="col-md-4 col-form-label text-md-right">Titre</label>

    <div class="col-md-6">
        <input id="titre" type="text" class="form-control " name="titre"  required placeholder="Titre de votre poste"  autofocus>

    </div>
    
</div>
<div class="form-group row">
    
    <label for="contenu" class="col-md-4 col-form-label text-md-right">Details</label>
    <div class="col-md-6">
        <input id="contenu" type="text" class="form-control "  name="contenu"  required placeholder="Detailler votre question"  autofocus >

    </div>
    
</div>
<button type="submit" class="Bout">Envoyer !</button>
</form>

    
    </body>
</html>