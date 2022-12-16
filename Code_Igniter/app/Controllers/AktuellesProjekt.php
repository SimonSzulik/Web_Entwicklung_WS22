<?php

namespace App\Controllers;

class AktuellesProjekt extends BaseController
{
    public function index()
    {
        $data['title'] = "AktuellesProjekt";
        echo view('templates/header', $data);
        echo view('pages/aktuellesProjekt');
        echo view('templates/footer');
    }
}
