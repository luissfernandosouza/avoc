<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppWebhookController extends Controller
{
    /**
     * Recebe mensagens via webhook da Evolution API.
     */
    public function handleReceivingMessageEvent(Request $request)
    {
        
        $data = $request->all();

        $message = $data['data']['message']['conversation'] ?? '';
        $phoneNumber = $data['data']['key']['remoteJid'] ?? '';

        $this->startChatbot($message, $phoneNumber);
    }

    /**
     * Lógica do chatbot.
     */
    protected function startChatbot($message, $phoneNumber)
    {
        // Defina um conjunto de respostas automáticas com base na mensagem recebida
        if (stripos($message, 'menu') !== false) {
            return $this->sendMessage($phoneNumber, 'Escolha uma opção: 1 - Suporte, 2 - Vendas');
        }

        if (stripos($message, '1') !== false) {
            return $this->sendMessage($phoneNumber, 'Você escolheu Suporte. Como podemos ajudá-lo?');
        }

        if (stripos($message, '2') !== false) {
            return $this->sendMessage($phoneNumber, 'Você escolheu Vendas. Deseja saber sobre nossos produtos?');
        }

        return $this->sendMessage($phoneNumber, 'Desculpe, não entendi. Digite "menu" para ver as opções.');
    }

    /**
     * Envia uma mensagem de volta via Evolution API.
     */
    protected function sendMessage($phoneNumber, $message)
    {
        Log::info("aaaaaaaaaaaaaa");
        $apiUrl = getenv('EVOLUTION_API_URL');
        $apiKey = getenv('EVOLUTION_API_KEY');

        $response = Http::withHeaders([
            'apikey' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post("{$apiUrl}/message/sendText/Luis", [
            'number' => $phoneNumber,
            'text' => $message,
        ]);

        return $response->json();
    }
}