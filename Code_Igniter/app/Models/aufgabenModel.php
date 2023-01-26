<?php

namespace App\Models;
use CodeIgniter\Model;

class aufgabenModel extends Model
{
    public function getData(): array
    {
        // Hier passieren Datenbankabfragen für die AufgabenTabelle
        $result = $this->db->query('SELECT * FROM aufgaben ORDER BY Id');
        return $result->getResultArray();
    }

    public function getReiter(): array
    {
        // Hier passieren Datenbankabfragen für die AufgabenTabelle
        $result = $this->db->query('SELECT * FROM reiter ORDER BY Id');
        return $result->getResultArray();
    }

    public function getMitglieder(): array
    {
        // Hier passieren Datenbankabfragen für die AufgabenTabelle
        $result = $this->db->query('SELECT * FROM mitglieder ORDER BY Id');
        return $result->getResultArray();
    }

    public function setAufgabe()
    {
        // neue Aufgabe
        $this->aufgaben = $this->db->table('aufgaben');
        return $this->aufgaben->insert(array('Name' => $_POST['neuAufgabeName'],
            'Beschreibung' => $_POST['neuAufgabeBeschreibung'],
            'Erstellungsdatum' => $_POST['neuErstellungsdatum'],
            'Fälligkeitsdatum' => $_POST['neuFaellig'],
            'ErstellerId' => $_SESSION['Id'],
            'ReiterId' => $_POST['neuReiter']));
    }

    public function getAufgabe($id)
    {
        // get spezifische Aufgabe
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');
        $this->aufgaben->where('aufgaben.Id', $_POST['id']);
        $result = $this->aufgaben->get();

        return $result->getRowArray();
    }

    public function editAufgabe($id)
    {
        // edit Aufgabe
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.Id', $id);

        return $this->aufgaben->update(array('Name' => $_POST['neuAufgabeName'],
            'Beschreibung' => $_POST['neuAufgabeBeschreibung']));
    }
}