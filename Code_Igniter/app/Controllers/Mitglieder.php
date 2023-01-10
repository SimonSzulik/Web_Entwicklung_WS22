<?php

namespace App\Controllers;
use App\Models\mitgliederModel;

class Mitglieder extends BaseController
{
    public function index()
    {
        $data['title'] = "Mitglieder";
        $personenModel = new mitgliederModel();
        $data['mitglieder'] = $personenModel->getData();
        echo view('templates/header', $data);
        echo view('pages/mitglieder', $data);
        echo view('templates/footer');
    }
}

