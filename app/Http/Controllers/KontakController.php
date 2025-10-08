<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index () {
         $data = [
            'email'     => 'dira@gmail.com',
            'instagram' => '@diradkntri'
        ];

        return view('kontak', [
            'data'  => $data,
            'judul' => 'Kontak'
        ]);
    }
}
