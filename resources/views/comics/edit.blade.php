<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="card-title">
        <h1>Modifica fumetto</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div clas="row">
                <div class="col-6">
                   <div class="mb-3">
                       <label for="title" class="form-label">Titolo</label>
                       <input type="text" class="form-control" id="title" placeholder="Titolo" name="title"
                       value="{{$comic->title}}">
                   </div>
              </div>
              <div class="col-6">
                   <div class="mb-3">
                       <label for="series" class="form-label">Serie</label>
                       <input type="text" class="form-control" id="series" placeholder="Serie" name="series"
                       value="{{$comic->series}}">
                   </div>
              </div>
              <div class="col-6">
                   <div class="mb-3">
                       <label for="type" class="form-label">Tipologia</label>
                       <input type="text" class="form-control" id="type" placeholder="Tipologia" name="type"
                       value="{{$comic->type}}">
                   </div>
              </div>
              <div class="col-6">
                   <div class="mb-3">
                       <label for="thumb" class="form-label">Copertina</label>
                       <input type="text" class="form-control" id="thumb" placeholder="URL Copertina" name="thumb"
                       value="{{$comic->thumb}}">
                   </div>
              </div>
              <div class="col-6">
                   <div class="mb-3">
                       <label for="price" class="form-label">Prezzo</label>
                       <input type="text" class="form-control" id="price" placeholder="Prezzo" name="price"
                       value="{{$comic->price}}">
                   </div>
              </div>
              <div class="col-6">
                   <div class="mb-3">
                       <label for="sale_date" class="form-label">data di uscita</label>
                       <input type="date" class="form-control" id="sale_date" placeholder="data di uscita" name="sale_date"
                       value="{{$comic->sale_date}}">
                   </div>
              </div>
              <div class="col-12">
                   <div class="mb-3">
                       <label for="description" class="form-label">Descrizione</label>
                       <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                   </div>
              </div>
         </div>
         <div class="card-footer bg-white d-flex justify-content-between px-0 align-items-center mb-3">
              <a class="btn btn-primary mx-3" href="{{route('comics.index')}}">Torna alla lista</a>
              <div>
                  <button type="submit" class="btn btn-success">Invia</button>
                  <button type="reset" class="btn btn-secondary">cancella</button>
              </div>
        </div>
        </form>
    </div>
</div>  
</body>
</html>