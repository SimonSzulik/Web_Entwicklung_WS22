<?php

namespace App\Controllers;
use App\Models\mitgliederModel;

class Login extends BaseController
{
    public function __construct() {
        $this->mitgliederModel = new mitgliederModel();
    }

    public function index()
    {
        if (!empty($_POST['username']) && !empty($_POST['passwort'])) {
            if($this->mitgliederModel->login() != NULL){
                $passwort = $this->mitgliederModel->login()['Password'];
                if(password_verify($_POST['passwort'], $passwort)){
                    $this->session->set('loggedin', True);
                    $mitgliedInfos = $this->mitgliederModel->mitgliedInfos();
                    $_SESSION['mitgliedInfos'] = $mitgliedInfos;
                    return redirect()->to(base_url() . '/aktuellesProjekt');
                }
            }
        }
        $data['title'] = "Login";

        echo view('templates/header', $data);
        echo view('pages/login');
        echo view('templates/footer');
    }
}
