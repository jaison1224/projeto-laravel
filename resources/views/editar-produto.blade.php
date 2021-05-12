<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 leading-tight">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>
<div class="container" style="margin-top: 5vh;">
<div class="card border">
    <div class="card-body">
        <form action="/update/produto/{{$pro->id}}" method="get" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col">
                    <label for="validationCustom03" >Nome</label><input class="form-control form-control-sm" type="text" value="{{$pro->nome}}" name="nome" />
                </div>
                <div class="col">
                   <label class="form-label" >Preço</label><input  class="form-control form-control-sm" style="display:inline-block" type="number" value="{{$pro->preco}}" name="preco"/>
                </div>
                <div class="col">
                    <label class="form-label" >Estoque</label><br>  <input class="form-control form-control-sm" type="number" value="{{$pro->estoque}}" name="estoque"/>
                </div> 
                <div class="col">
                <label for="validationCustom04" >Categoria</label><br>
                    <select class="form-control form-control-sm" @foreach($cats as $cat) name="categoria_id" id="categoria_id">
                       @if($pro->categoria_id == $cat->id)<option selected value="{{$cat->id}}">{{$cat->nome}}</option>@endif 
                       @if($pro->categoria_id != $cat->id)<option value="{{$cat->id}}">{{$cat->nome}} </option>@endif 
                        @endforeach
                    </select>
                </div>
            <div class="col input-group">
                <div class="custom-file" style="margin-top: 4vh;">
                    <label class="custom-file-label" for="inputGroupFile04"> Escolher Imagem</label>
                    <input type="file" class="custom-file-input"  name="image" id="inputGroupFile04" lang="pt">
                    
                </div>
            </div> 
        </div><br>
            <button class="btn btn-ms btn-primary" id="right" type="submit">Editar</button>
        </form>
    </div>
        </div> 
</div>    
</x-app-layout>