<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="jumbotron bg-light border border-secondary" id="margem">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title"> Cadastro de produtos</h5>
                        <p class="card-text">
                            Aqui você cadastro todos os seus produtos.
                            Só não se esqueça de cadastrar previamente as categorias
                        </p>
                        <a href="/produto" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title"> Cadastro de categorias</h5>
                        <p class="card-text">
                            Aqui você cadastra sua categorias.
                        </p>
                        <a href="/categoria" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>