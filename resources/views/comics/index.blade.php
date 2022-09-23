<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="card-title d-flex align-items-center justify-content-beetween">
        <h1>Comics</h1>
        <a href="{{route('comics.create')}}" class="btn btn-success mx-3">Inserisci fumetto</a>
    </div>
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Title</th>
      <th scope="col">Thumb</th>
      <th scope="col">Price</th>
      <th scope="col">Series</th>
      <th scope="col">Sale Date</th>
      <th scope="col">type</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @forelse($comics as $comic)
      <tr>
        
        <td>{{$comic->title}}</td>
        <th scope="row">
            @if($comic->thumb)
              <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid" width="30"/>
            @endif
            
        </th>
        <td>{{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>
        <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-small btn-primary">Vedi</a></td>
      </tr>
    @empty
      <tr>
        <td colspan = "7">
            <h3>Nessun Fumetto disponibile</h3>
        </td>
      </tr>
    @endforelse
    
</table>
    </div>
    </div>
</body>
</html>