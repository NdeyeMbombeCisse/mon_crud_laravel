<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud_laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

    <div class="container text-center">
        <div class="row">
          <div class="col">
            <h1> liste des articles</h1>


            <a href="/Ajouter" class="btn btn-primary">Ajouter un etudiant</a> <br> <br>
            @foreach ($articles as $article)           
            <div class="card" style="width: 18rem; display:inline-grid">
                <img src="{{ $article-> image }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">{{ $article -> id}}</h5>
                  <h3 class="card-title">{{ $article -> nom }}</h5>
                  <p class="card-title">{{ $article -> date}}</p>  
                  <p class="card-text">{{ $article -> description }}</p>
                  <p class="card-title">{{ $article -> etat }}</p>  
                   <a href="update_article/ {{ $article -> id }}" class="btn btn-primary">modifier</a> 
                   <a href="delete_article/ {{ $article -> id }}" class="btn btn-danger">Supprimer</a> 
                </div>  
              </div>   
              @endforeach
          </div>
          
         
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>