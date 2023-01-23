<?php

namespace App\Controllers;
use App\Models\mitgliederModel;

class Profil extends BaseController
{
    public function __construct() {
        $this->mitgliederModel = new mitgliederModel();
    }

    public function index()
    {
        $data['missingInfos'] = "NotMissing";
        if (!empty($_POST['username']) && !empty($_POST['Passwordold'])){
            if($this->mitgliederModel->login() != NULL){
                $password = $this->mitgliederModel->login()['Password'];
                if(password_verify($_POST['Passwordold'],$password)){
                    if($_POST['username'] == $_SESSION['Username']){
                        // correct case --> richtige userdaten und gleicht dem bereits angemeldeten user
                        // hier muss jetzt geprüft werden ob die felder leer sind, wenn nicht werden die daten geändert.
                        if (!empty($_POST['Email']) && !empty($_POST['PasswordNew'])){
                            // hier müssen jetzt die daten in der Datenbank angepasst werden
                            // Außerdem wird die user und session variable angepasst
                            $this->mitgliederModel->edit($_SESSION['Id']);
                            $user = array(
                                'logged' => TRUE,
                                'Id' => $this->mitgliederModel->login()['Id'],
                                'Username' => $this->mitgliederModel->login()['Username'],
                                'EMail' => $this->mitgliederModel->login()['EMail'],
                                'inProjekt' => $this->mitgliederModel->login()['inProjekt']
                            );
                            $this->session->set($user);
                        }else{
                            // hier case mit unausgefüllten neuen daten
                            $data['missingInfos'] = "missingInfos";
                        }
                    }
                }
            }
        }

        $data['title'] = "Profil";
        $data['user'] = $_SESSION;

        echo view('templates/header', $data);
        echo view('pages/profil', $data);
        echo view('templates/footer');
    }
}
