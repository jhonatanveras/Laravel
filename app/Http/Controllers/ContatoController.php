<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=> 'Jhonatan', 'tel'=> '11975287684'],
            (object)["nome"=> 'Jaqueline', 'tel'=> '11968752387'],
            (object)["nome"=> 'David', 'tel'=> '11956248745'],
            (object)["nome"=> 'William', 'tel'=> '11947958945'],
            (object)["nome"=> 'Jessica', 'tel'=> '11985567357'],
        ];

        $contato = new Contato();
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $request): string
    {

        return 'Esse é o criar do contatoController';
    }

    public function editar(Request $request): string
    {

        return 'Esse é o editar do contatoController';
    }
}
