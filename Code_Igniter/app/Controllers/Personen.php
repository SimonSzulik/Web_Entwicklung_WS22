<?php

namespace App\Controllers;

class Personen extends BaseController
{
    public function index()
    {
        $data['title'] = "Personen";
        echo view('templates/header', $data);
        echo view('pages/personen');
        echo view('templates/footer');
    }
}
