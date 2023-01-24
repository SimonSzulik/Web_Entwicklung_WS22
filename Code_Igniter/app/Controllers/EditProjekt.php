<?php

namespace App\Controllers;
use App\Models\projektModel;

class EditProjekt extends BaseController
{
    public function __construct()
    {
        $this->projektModel = new projektModel();
    }

    public function index()
    {
        if (empty($_POST['neuProjektName']) || empty($_POST['neuProjektBeschreibung'])){
            $data['projektfilled'] = "yes";
            $data['title'] = "Projekt bearbeiten";

            echo view('templates/header', $data);
            echo view('pages/projekt_edit', $data);
            echo view('templates/footer');
        }else{
            $_SESSION['projekt']['Beschreibung'] = $_POST['neuProjektBeschreibung'];
            $_SESSION['projekt']['Name'] = $_POST['neuProjektName'];

            $this->projektModel->editProjekt($_SESSION['projekt']['Id']);
            return redirect()->to(base_url() . '/aktuellesProjekt');
        }
    }
}
