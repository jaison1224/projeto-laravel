<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Novo Produto</h5>
        <form action="/update/produto/{{$pro->id}}" method="get" >
            <div class="form-row">
                <div class="col-2">
                    <input class="form-control" type="text" value="{{$pro->id}}"/>
                </div>
                <div class="col-2">
                    <input class="form-control" type="text" value="{{$pro->nome}}" name="nome"/>
                </div>
                <div class="col-2">
                    <input id="dinheiro" class="dinheiro form-control" style="display:inline-block" type="number" value="{{$pro->preco}}" name="preco"/>
                </div>
                <div class="col-2">
                    <input class="form-control" type="number" value="{{$pro->estoque}}" name="estoque"/>
                </div>  
                <label class="form-label" >Categoria:</label>
                    <select class="form-select col-2" @foreach($cats as $cat) name="categoria_id" id="categoria_id">
                       @if($pro->categoria_id == $cat->id)<option selected value="{{$cat->id}}">{{$cat->nome}}</option>@endif 
                       @if($pro->categoria_id != $cat->id)<option value="{{$cat->id}}">{{$cat->nome}} </option>@endif 
                        @endforeach
                    </select>
            </div>
            <br>
            <button class="btn btn-ms btn-primary" id="right" type="submit">Editar</button>
        </form>
    </div>
</div>
</x-app-layout>