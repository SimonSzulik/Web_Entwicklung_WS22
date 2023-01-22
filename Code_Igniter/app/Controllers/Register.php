<?php

namespace App\Controllers;

use App\Models\mitgliederModel;

class Register extends BaseController
{
    public function __construct()
    {
        $this->mitgliederModel = new mitgliederModel();
    }

    public function index()
    {
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
            if (!empty($_POST['AGBs'])) {
                var_dump($_POST);
                $this->mitgliederModel->register();
                $_SESSION['registriert'] = "registriert";
                return redirect()->to(base_url() . '/login');
            } else {
                $data['title'] = "Registrieren";
                $data['missingAGB'] = "noagb";

                echo view('templates/header', $data);
                echo view('pages/register', $data);
                echo view('templates/footer');
            }
        } else {
            $data['title'] = "Registrieren";
            $data['missingAGB'] = "noInput";

            echo view('templates/header', $data);
            echo view('pages/register');
            echo view('templates/footer');
        }
    }
}
