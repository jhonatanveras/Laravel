@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
<h3>Essa é a view index</h3>

@foreach($contatos as $contato)
    <table>
        <tr>
            <td>{{$contato->nome}}</td>
        </tr>
        <tr>
            <td>{{$contato->tel}}</td>
        </tr>
    </table>
@endforeach

@endsection
