<?php

namespace App\Controllers;
use App\Models\mitgliederModel;

class Edit extends BaseController
{
    public function __construct() {
        $this->mitgliederModel = new mitgliederModel();
    }

    public function index($id = null)
    {
        if (!empty($_POST['username']) && !empty($_POST['passwort']) && !empty($_POST['email'])) {
            $mitgliedInfos = $_SESSION['mitgliedInfos'][0];
            $this->mitgliederModel->edit($mitgliedInfos['Id']);
            return redirect()->to(base_url() . '/mitglieder');
        }

        $data['title'] = "Mitglieder";
        $personenModel = new mitgliederModel();
        $data['mitglieder'] = $personenModel->getOneData($id)[0];

        echo view('templates/header', $data);
        echo view('pages/edit', $data);
        echo view('templates/footer');
    }
}

