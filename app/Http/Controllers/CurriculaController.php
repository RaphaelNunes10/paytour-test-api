<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mail\CurriculumMail as CurriculumMail;

class CurriculaController extends Controller
{
    public function index()
    {
        return Curriculum::all();
    }

    public function store(Request $request)
    {
        $curriculum = Curriculum::create([
            'ip' => $request->input('ip'),
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'cargo' => $request->input('cargo'),
            'escolaridade' => $request->input('escolaridade'),
            'obs' => $request->input('obs'),
            'arquivo' => $request->input('arquivo'),
        ]);

        // Mail::to($request->input('email'))->send(new CurriculumMail($request->input()));

        return $curriculum;
    }

    public function update(Request $request, Curriculum $curriculum)
    {
        $curriculum->ip = $request->input('ip');
        $curriculum->nome = $request->input('nome');
        $curriculum->email = $request->input('email');
        $curriculum->telefone = $request->input('telefone');
        $curriculum->cargo = $request->input('cargo');
        $curriculum->escolaridade = $request->input('escolaridade');
        $curriculum->obs = $request->input('obs');
        $curriculum->arquivo = $request->input('arquivo');

        $curriculum->save();

        return $curriculum;
    }

    public function remove(Curricula $curriculum)
    {
        $curriculum->delete();
    }
}
