<?php

namespace App\Controllers;
use App\Models\projektModel;

class NewProjekt extends BaseController
{
    public function __construct()
    {
        $this->projektModel = new projektModel();
    }

    public function index()
    {
        if (empty($_POST['neuProjektName']) || empty($_POST['neuProjektBeschreibung'])){
            $data['projektfilled'] = "yes";

            $data['title'] = "Projekte";
            echo view('templates/header', $data);
            echo view('pages/newProjekt');
            echo view('templates/footer');
        }else{
            $this->projektModel->setProjekt();
            return redirect()->to(base_url() . '/Projekte');
        }
    }

}
