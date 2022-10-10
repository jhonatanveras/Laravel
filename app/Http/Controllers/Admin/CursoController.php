<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request)
    {
        $curso = new Curso();

        if($request->publicado) {
            $request->publicado = 'sim';
        }else {
            $request->publicado = 'não';
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $num = rand(1111,9999);
            $dir = 'img/cursos/';
            $ex = $image->guessClientExtension();
            $nomeImage = "image_".$num.".".$ex;
            $image->move($dir, $nomeImage);
            $dados['image'] = $dir."/".$nomeImage;
        }
        $curso->titulo = $request->titulo;
        $curso->descricao = $request->descricao;
        $curso->valor = $request->valor;
        $curso->image = $dados['image'] ?? 'false';
        $curso->publicado = $request->publicado;
        $curso->save();

        return redirect()->route('admin.cursos');
    }

    public function editar($id)
    {
        $registro = Curso::find($id);

        return view('admin.cursos.editar', compact('registro'));
    }

    public function deletar($id)
    {
        $registro = Curso::find($id);
        $registro->delete();
        return redirect()->back();
    }

    public function atualizar(Request $request)
    {
        $curso = Curso::find($request->id);

        if($request->publicado) {
            $request->publicado = 'sim';
        }else {
            $request->publicado = 'não';
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $num = rand(1111,9999);
            $dir = 'img/cursos/';
            $ex = $image->guessClientExtension();
            $nomeImage = "image_".$num.".".$ex;
            $image->move($dir, $nomeImage);
            $dados['image'] = $dir."/".$nomeImage;
        }

        $curso->titulo = $request->titulo;
        $curso->descricao = $request->descricao;
        $curso->valor = $request->valor;
        $curso->image = $dados['image'] ?? $request->image;
        $curso->publicado = $request->publicado;

        $curso->update();

        return redirect()->route('admin.cursos');
    }
}
