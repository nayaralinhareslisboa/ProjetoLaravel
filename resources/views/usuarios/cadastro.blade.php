@extends('layouts.app')
@section('cadastro')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mx-3">
            <h1 class="text-center">Cadastro de Usuário</h1>
        </div>
        <div class="col col-lg-6 mx-auto table-responsive">
            <form class="row row-cols-1" method="post" action="{{ route('usuarios.novo')}}">
            @csrf
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                    <label for="nome">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="login" name="login" placeholder="login" required>
                    <label for="login">Login</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="senha" required>
                    <label for="senha">Senha</label>
                </div>
            </div>
                <button class="btn btn-success" type="submit">Salvar</button>
            </form> 
        </div>
    </div>
</div>
@endsection