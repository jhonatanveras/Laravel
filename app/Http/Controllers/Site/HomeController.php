<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Curso;

class HomeController extends Controller
{
    public function index() {
        $cursos = Curso::paginate(4);

        return view('home', compact('cursos'));
    }
}
