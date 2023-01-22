<?php

namespace App\Controllers;

use App\Models\mitgliederModel;

class Mitglieder extends BaseController
{
    public function __construct()
    {
        $this->mitgliederModel = new mitgliederModel();
    }

    public function index()
    {
        $data['title'] = "Mitglieder";
        $personenModel = new mitgliederModel();
        $data['mitglieder'] = $personenModel->getAlleMitglieder();
        echo view('templates/header', $data);
        echo view('pages/mitglieder', $data);
        echo view('templates/footer');
    }
}