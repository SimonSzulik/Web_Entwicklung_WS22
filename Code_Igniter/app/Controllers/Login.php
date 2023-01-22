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
        if (isset($_POST['username']) && isset($_POST['password'])){
            if($this->validation->run($_POST, 'userlogin')){
                if($this->mitgliederModel->login() != NULL){
                    $password = $this->mitgliederModel->login()['Password'];
                    if(password_verify($_POST['password'],$password)){
                        $user = array(
                            'logged' => TRUE,
                            'id' => $this->mitgliederModel->login()['Id'],
                            'username' => $this->mitgliederModel->login()['Username'],
                            'email' => $this->mitgliederModel->login()['EMail']
                        );
                        $this->session->set($user);
                        return redirect()->to(base_url().'/aktuellesProjekt');
                    }
                }else{
                    $data['error'] = $this->validation->getErrors();
                }
            }
        }
        $data['title'] = "Login";

        echo view('templates/header', $data);
        echo view('pages/login', $data);
        echo view('templates/footer');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url().'/login');
    }
}
