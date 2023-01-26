<?php

namespace App\Controllers;
use App\Models\projektModel;

class Projekte extends BaseController
{
    public function __construct()
    {
        $this->projektModel = new projektModel();
    }

    public function index()
    {

        $projektModel = new projektModel();
        $data['projekte'] = $projektModel->getAlleProjekte();
        $data['title'] = "Projekt";

        if (!empty($_GET['selectProjekt'])){
            $aktuelles_Projekt = $projektModel->getProjekt($_GET['selectProjekt']);
            $_SESSION['projekt'] =$aktuelles_Projekt;
        }

        echo view('templates/header', $data);
        echo view('pages/projekte', $data);
        echo view('templates/footer');
    }

    public function delete_project(){
        $this->projektModel->delete_projekt($_SESSION['projekt']['Id']);
        $this->session->destroy();
        return redirect()->to(base_url().'/projekte');
    }
}
