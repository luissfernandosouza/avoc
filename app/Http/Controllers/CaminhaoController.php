<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function create()
    {
        return view('caminhao.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'placa' => 'required|string|size:7|unique:caminhoes,placa',
            'ano' => 'required|integer|min:1900|max:' . date('Y'),
            'cor' => 'required|string|max:50',
        ]);

        Caminhao::create($request->all());

        return redirect()->route('caminhao.create')->with('success', 'Caminhão cadastrado com sucesso!');
    }
}
