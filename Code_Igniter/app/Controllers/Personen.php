<?php

namespace App\Controllers;
use App\Models\personenModel;

class Personen extends BaseController
{
    public function index()
    {
        $data['title'] = "Mitglieder";
        $personenModel = new personenModel();
        $data['mitglieder'] = $personenModel->getData();
        echo view('templates/header', $data);
        echo view('pages/personen', $data);
        echo view('templates/footer');
    }
}

