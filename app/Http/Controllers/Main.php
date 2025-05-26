<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    /**
     * Main Page
     */
    public function index()
    {
        $data = [
            'title' => 'Gestor de Tarefas'
        ];

        return view('main', $data);
    }

    /**
     * Login
     */
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login_frm', $data);
    }

    public function login_submit(Request $request)
    {
        // form validation
        $request->validate([
            'text_username' => 'required|min:3',
            'text_password' => 'required|min:3',
        ], [
            'text_username.required' => 'O campo é de preenchimento obrigatório.',
            'text_username.min' => 'O campo deve ter no mínimo 3 caracteres.',
            'text_password.required' => 'O campo é de preenchimento obrigatório.',
            'text_password.min' => 'O campo deve ter no mínimo 3 caracteres.',
        ]);

        echo "formulário com sucesso!";
    }

    /**
     * Logout
     */
    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
