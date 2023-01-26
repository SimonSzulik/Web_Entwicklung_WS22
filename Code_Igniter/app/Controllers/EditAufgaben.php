<?php

namespace App\Controllers;

use App\Models\aufgabenModel;

class EditAufgaben extends BaseController
{
    public function index()
    {
        $aufgabenModel = new aufgabenModel();

        if (empty($_POST['neuAufgabeName'])
            || empty($_POST['neuAufgabeBeschreibung'])) {

            $data['projektfilled'] = "yes";

            if (isset($_POST['id'])) {
                $_SESSION['aufgabe'] = $aufgabenModel->getAufgabe($_POST['id']);
            }
            $data['title'] = "Aufgabe bearbeiten";

            echo view('templates/header', $data);
            echo view('pages/aufgabe_edit', $data);
            echo view('templates/footer');
        } else {
            $aufgabenModel->editAufgabe($_SESSION['aufgabe']['Id']);
            return redirect()->to(base_url() . '/Aufgaben');
        }
    }
}
