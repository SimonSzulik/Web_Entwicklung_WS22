<?php

namespace App\Controllers;
use App\Models\aufgabenModel;

class NewAufgabe extends BaseController
{
    public function __construct()
    {
        $this->aufgabenModel = new aufgabenModel();
    }

    public function index()
    {
        if (empty($_POST['neuAufgabeName']) || empty($_POST['neuAufgabeBeschreibung'])
            || empty($_POST['neuErstellungsdatum']) || empty($_POST['neuFaellig'])
            || empty($_POST['neuReiter']) ){
            $data['projektfilled'] = "yes";

            $data['title'] = "Neue Aufgabe";
            echo view('templates/header', $data);
            echo view('pages/newAufgabe');
            echo view('templates/footer');
        }else{
            $data['reiter'] = $this->aufgabenModel->getReiter();
            foreach($data['reiter'] as $reit){
                if($reit['Name'] == $_POST['neuReiter']){
                    $_POST['neuReiter'] = $reit['Id'];
                }
            }
            $this->aufgabenModel->setAufgabe();
            return redirect()->to(base_url() . '/Aufgaben');
        }
    }

}
