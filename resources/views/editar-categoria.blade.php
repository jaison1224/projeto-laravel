<x-app-layout>
    <x-slot name="header">
        <h5> Editar Categoria</h5>
    </x-slot>
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Editar Categoria</h5>
        <form action="/editar/{{$cat->id}}" method="get">
            <div class="form-row">
                <div class="col-1">
                    <input class="form-control" type="text" value="{{$cat->id}}"/>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" value="{{$cat->nome}}" name="nome"/>
                </div>
            <button class="btn btn-ms btn-primary" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>