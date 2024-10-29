<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index()
    {
        $transportes = [
            (object)[
                'placa_caminhao' => 'ABC-1234',
                'motorista' => 'João da Silva',
                'situacao_viagem' => 'Em trânsito',
                'previsao_chegada' => '2024-10-21 15:00',
            ],
            (object)[
                'placa_caminhao' => 'DEF-5678',
                'motorista' => 'Maria dos Santos',
                'situacao_viagem' => 'Aguardando carga',
                'previsao_chegada' => '2024-10-22 09:00',
            ],
            (object)[
                'placa_caminhao' => 'GHI-9012',
                'motorista' => 'Carlos Pereira',
                'situacao_viagem' => 'Viagem concluída',
                'previsao_chegada' => '2024-10-20 18:30',
            ],
        ];

        return view('transporte_cards', compact('transportes'));
    }
}

