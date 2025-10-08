<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama'    => 'Dira Mayzaro Dekantari',
            'kelas'   => 'XI PPLG 1',
            'sekolah' => 'SMK Raden Umar Said'
        ];
        return view('profile',[
            'data' => $data, 
            'judul' => 'Profile'
        ]);
    }
}
