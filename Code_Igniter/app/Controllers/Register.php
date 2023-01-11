<?php

namespace App\Controllers;
use App\Models\mitgliederModel;

class Register extends BaseController
{
    public function __construct() {
        $this->mitgliederModel = new mitgliederModel();
    }

    public function index()
    {
        if (!empty($_POST['username']) && !empty($_POST['passwort']) && !empty($_POST['email'])) {
            $this->mitgliederModel->register();
            return redirect()->to(base_url() . '/login');
        }
        $data['title'] = "Registrieren";

        echo view('templates/header', $data);
        echo view('pages/register');
        echo view('templates/footer');
    }
}
