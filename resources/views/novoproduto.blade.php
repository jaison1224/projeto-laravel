<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Novo Produto</h5>
        <form action="/criar/produto" method="get" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-2">
                    <input class="form-control" type="text" placeholder="Novo Produto" name="nome"/>
                </div>
                <div class="col-2">
                    <input class="form-control" type="number" placeholder="Preço" name="preco"/>
                </div>
                <div class="col-2">
                    <input class="form-control" type="number" placeholder="Estoque" name="estoque"/>
                </div>  
                <label class="form-label" >Categoria:</label>
                    <select class="form-select col-2" @foreach($cats as $cat) name="id" id="id">
                        <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                    </select>
            </div>
            <input type="file" name="image" id="image">
            <br>
            <button class="btn btn-ms btn-primary" id="right" type="submit">Criar</button>
        </form>
    </div>
</div>
</x-app-layout>