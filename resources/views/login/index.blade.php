@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar no Sistema</h3>
        <div class="row">
            <form class="" action='{{route('site.login.entrar')}}' method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="email" required>
                        <label>Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" name="senha" required>
                        <label>Senha</label>
                    </div>
                </div>

                <button class="btn grey darken-4">Entrar</button>
            </form>
        </div>
    </div>
@endsection
