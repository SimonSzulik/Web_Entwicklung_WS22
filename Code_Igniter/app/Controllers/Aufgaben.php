<?php

namespace App\Controllers;
use App\Models\aufgabenModel;

class Aufgaben extends BaseController
{
    public function index()
    {
        $data['title'] = "Aufgaben";
        $aufgabenModel = new aufgabenModel();
        $data['aufgaben'] = $aufgabenModel->getData();
        echo view('templates/header', $data);
        echo view('pages/aufgaben', $data);
        echo view('templates/footer');
    }
}
