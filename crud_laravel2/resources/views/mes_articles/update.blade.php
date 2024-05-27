<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud_laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   

    <div class="container ">
        <div class="row">
          <div class="col">
            <h1> Modifierdes articles</h1>
            @if(session ('status'))
            <div class="alert alert-success">
                {{ session ('status') }}
            </div>
            @endif
           
            <form action="{{ url('update_article/'.$articles->id) }}" method="POST">
                @csrf
                @methode('put')
                <input type="text" name="id" style="display:none ;" value="{{ $articles->id}}">
                <ul>
                    @foreach ( $errors->all() as $error )
                    <li class="alert alert-danger">{{ $error }}</li>
                    
                    @endforeach

                </ul>

                <div class="mb-1">
                  <label for="text" class="form-label">Ajouter L'URL de l'image</label>
                    <input type="text" class="form-control" id="image" name="image" accept="image/*"  value="{{ $articles->image}}"><br>
                  </div> 
                <div class="mb-3">
                  <label for="nom" class="form-label">Donner le nom de l'article</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="{{ $articles->nom }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Donner le description de l'article</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $articles->description }}">
                  </div>
                  <div class="mb-3">
                    <label for="date" class="form-label">Donner le date de l'article</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $articles->date}}">
                  </div>
                  <div class="mb-3">
                    <label for="etat" class="form-label">Donner le etat de l'article</label>
                    <input type="text" class="form-control" id="etat" name="etat" value="{{ $articles->etat}}">
                    
                  </div>
                <button type="Soumettre" class="btn btn-primary">modifier</button>
                <a href="Affichage"  class="btn btn-danger"> voir la liste</a>
              </form>
              

            
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>