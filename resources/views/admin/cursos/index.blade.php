@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->descricao}}</td>
                        <td>R${{$registro->valor}}</td>
                        <td><img height="70" src="{{asset($registro->image)}}" alt="{{$registro->titulo}}"></td>
                        <td>{{$registro->publicado}}</td>
                        <td class="center">
                            <a class="btn blue-grey center" href='{{route("admin.cursos.editar", $registro->id)}}'>Editar</a>
                            <a class="btn red center" href='{{route("admin.cursos.deletar", $registro->id)}}'>Deletar</a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn grey darken-4" href='{{route("admin.cursos.adicionar")}}'>Adicionar</a>

        </div>

    </div>


@endsection
