@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
            <form class="" action='{{route('admin.cursos.salvar')}}' method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.cursos._form')
                <button class="btn grey darken-4">Salvar</button>
            </form>
        </div>
    </div>
@endsection
