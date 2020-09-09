 
 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
         <title>Comment add</title>
 
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet"> 
         <link href="assets/css/style.css" rel="stylesheet">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
     </head>
     <body>
 

       //---------------------------------------------------------------------
       <h5>Leave a comment</h5>
       <form action="{{ route('comment.add') }}" method="POST">
        @csrf
                      

                      <textarea  name="body" placeholder="Write your comment hear"></textarea>
                      <button type="submit" class="Bout">Envoyer !</button>
              </form>
      //--------------------------------------------------------------------
</body>
</html>