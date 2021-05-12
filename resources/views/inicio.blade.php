<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
            
    </head>
<body>
<div class="container" style="">
<div class="row">

@foreach($pros as $pro)
<div class="col-sm-3" style="margin-top: 5vh; ">
<div class="card" style="width: 18rem;">

    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$pro->nome}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Estoque: {{$pro->estoque}}</li>
      <li class="list-group-item">Preço: {{$pro->preco}}</li>
      @foreach($cats as $cat)
                        @if($pro->categoria_id==$cat->id)
                            <li class="list-group-item">Categoria: {{$cat->nome}}</li>
                        @endif
       @endforeach
      
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div> 
</div>
</div>
    @endforeach

</div>
</div>
</body>
</html>
