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
<div class="card border" id="margem">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produto</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
        @foreach($pros as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->nome}}</td>
                    <td>{{$pro->preco}}</td>
                    <td>{{$pro->estoque}}</td>
                    @foreach($cats as $cat)
                        @if($pro->categoria_id==$cat->id)
                            <td>{{$cat->nome}}</td>
                        @endif
                    @endforeach
        @endforeach
            </tbody>
        </table>
    </div>
</div>   
</body>
</html>