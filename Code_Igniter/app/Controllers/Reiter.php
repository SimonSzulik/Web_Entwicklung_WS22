<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function index()
    {
        $data['title'] = "Reiter";
        echo view('templates/header', $data);
        echo view('pages/reiter');
        echo view('templates/footer');
    }
}
