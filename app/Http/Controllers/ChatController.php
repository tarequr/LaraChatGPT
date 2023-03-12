<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;
use OpenAI\Laravel\Facades\OpenAI;

class ChatController extends Controller
{
    public function index()
    {
        $messages = collect((session('messages', [])))->reject(fn ($message) => $message['role'] === 'system');
        // $messages = collect(session('messages', []))->reject(fn ($message) => $message['role'] === 'system');
// dd($messages);
        return view('index', compact('messages'));
    }

    public function store(Request $request)
    {
        $messages = $request->Session()->get('messages', [
            ['role' => 'system',
            'content' => 'You are LaravelGPT - C ChatGPT Clone . Answer as concisely as possible.']
        ]);

        $messages[] = ['role' => 'user', 'content' => $request->message];

        $response =  OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);

        $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];

        $request->session()->pull('messages', $messages);

        return render('/');
    }
}
