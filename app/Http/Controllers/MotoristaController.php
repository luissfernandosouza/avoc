<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorista;

class MotoristaController extends Controller
{
    public function create()
    {
        return view('motorista.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|size:11',
            'telefone' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
        ]);

        Motorista::create($request->all());

        return redirect()->route('motorista.create')->with('success', 'Motorista cadastrado com sucesso!');
    }
}