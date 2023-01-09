<?php

namespace App\Controllers;
use App\Models\reiterModel;

class Reiter extends BaseController
{
    public function index()
    {
        $data['title'] = "Reiter";
        $reiterModel = new reiterModel();
        $data['reiter'] = $reiterModel->getData();
        echo view('templates/header', $data);
        echo view('pages/reiter', $data);
        echo view('templates/footer');
    }
}
