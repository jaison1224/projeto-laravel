@extends ('layout.app', ['current'=>'categoria']);

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/criar/categoria" method="get" >
            <input class="form-control" type="text" placeholder="nova categoria" name="nome"/>
            <br>
            <button class="btn btn-ms btn-primary" type="submit">Criar</button>
        </form>
    </div>
</div>
@endsection