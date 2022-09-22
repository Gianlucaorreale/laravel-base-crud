<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
   <div class="card-title  mt-4">
        <h1>{{$comic->title}}</h1>
    </div>
    <div class="card-body">
         <div class="row">
            @if($comic->thumb)
                <div class="col-3 pt-3">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                </div>
            @endif
            <div class="col-9 ">
                <h3>{{$comic->series}}</h3>
                <p>{{$comic->description}}</p>
                <div><strong>prezzo:</strong>{{$comic->price}}</div>
                <div><strong>serie:</strong>{{$comic->series}}</div>
            </div>
         </div>
    </div>
    <div class="card-footer d-flex justify-content-end align-items-center bg-white">
        <a class="btn btn-small btn-secondary " href="{{route('comics.index')}}">Torna indietro</a>
    </div>
   </div>
</body>
</html>