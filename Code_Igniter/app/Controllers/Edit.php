<?php

namespace App\Controllers;
use App\Models\mitgliederModel;

class Edit extends BaseController
{
    public function index()
    {
        $data['title'] = "Mitglieder";
        $personenModel = new mitgliederModel();
        $data['mitglieder'] = $personenModel->getData();
        var_dump($_SESSION);
        echo view('templates/header', $data);
        echo view('pages/edit', $data);
        echo view('templates/footer');
    }
}

