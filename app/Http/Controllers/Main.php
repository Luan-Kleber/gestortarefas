<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Olá Laravel 10',
            'description' => 'Aprendendo Laravel 10'
        ];

        return view('main', $data);
    }

    public function users()
    {
        // get users with raw sql
        //$users = DB::select('SELECT * FROM users');

        //with query builder
        //$users = DB::table('users')->get();

        // with query builder - return in array
        //$users = DB::table('users')->get()->toArray();
        
        //using Eloquent ORM - Using Model
        $model = new UserModel();

        $users = $model->all();

        dd($users);
    }

    public function view()
    {
        $data = [
            'title' => "Título da pagina"
        ];

        return view('home', $data);
    }
}
