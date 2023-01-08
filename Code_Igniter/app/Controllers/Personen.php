<?php

namespace App\Controllers;
use App\Models\personenModel;

class Personen extends BaseController
{

    public function index()
    {
        $data['title'] = "Personen";
        $personenModel = new personenModel();
        $data['mitglieder'] = $personenModel->getData();
        //$data['mitglieder'] = array(
        /*    array(
                'id' => '0',
                'name' => 'Simon Szulik',
                'email' => 's4siszul@uni-trier.de',
                'inProjekt' => false
            ),
            array(
                'id' => '1',
                'name' => 'Clara Gutbrodt',
                'email' => 's1clgutb@uni-trier.de',
                'inProjekt' => true
            )
        )*/
        echo view('templates/header', $data);
        echo view('pages/personen', $data);
        echo view('templates/footer');
    }
}

