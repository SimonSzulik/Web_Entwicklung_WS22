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
        $data['reiter'] = $aufgabenModel->getReiter();
        $data['alleUser'] = $aufgabenModel->getMitglieder();

        echo view('templates/header', $data);
        echo view('pages/aufgaben', $data);
        echo view('templates/footer');
    }
}
