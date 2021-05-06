@extends ('layout.app', ['current'=>'produto']);

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Novo Produto</h5>
        <form action="/criar/produto" method="get" >
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
            <br>
            <button class="btn btn-ms btn-primary" id="right" type="submit">Criar</button>
        </form>
    </div>
</div>
@endsection