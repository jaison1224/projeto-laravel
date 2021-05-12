<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="container">
<div class="card" style="width: 46rem;" id="margem-categoria">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>
        <table class="table table-ordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome Categoria</th>
                </tr>
            </thead>
            <tbody>
        @foreach($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td>
                        <a href="/categoria/editar/{{$cat->id}}" class="btn btn-sm btn-primary" id="margem-btn">Editar</a>
                        <a href="/categoria/apagar/{{$cat->id}}" class="btn btn-sm btn-danger"id="margem-btn">Apagar</a>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
        <a class="btn btn-sm btn-primary" href="/novacategoria">Nova Categoria</a>
    </div>
</div>
</div>
</x-app-layout>