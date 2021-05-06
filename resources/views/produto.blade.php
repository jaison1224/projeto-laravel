<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
                    <td>
                        <a href="/categoria/editar/{{$pro->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/categoria/apagar/{{$pro->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
        <a class="btn btn-sm btn-primary" href="/novoproduto">Novo Produto</a>
    </div>
</div>    
</x-app-layout>