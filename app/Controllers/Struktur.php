<?php

namespace App\Controllers;


class Struktur extends BaseController
{
    
    public function index()
    {
        // $wisata = $this->pariwisataModel->findAll();
        $data = [
            'title' => 'Struktur Kepengurusan Bumdesa',
        ];


        return view('struktur/index', $data);
    }
}
