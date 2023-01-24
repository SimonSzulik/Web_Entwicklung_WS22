<?php

namespace App\Models;
use CodeIgniter\Model;

class projektModel extends Model
{
    public function setProjekt()
    {
        // neues Projekt
        $this->projekte = $this->db->table('projekte');
        return $this->projekte->insert(array('Name' => $_POST['neuProjektName'], 'Beschreibung' => $_POST['neuProjektBeschreibung'], 'ErstellerId' => $_SESSION['Id'] ));
    }

    public function getAlleProjekte(): array{
        // alle projekte bekommen
        $result = $this->db->query('SELECT * FROM projekte ORDER BY Id');
        return $result->getResultArray();
    }

    public function getProjekt($Name){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.Name', $Name);
        $result = $this->projekte->get();

        return $result->getRowArray();
    }

    public function delete_projekt($id){
        $sql = 'DELETE FROM projekte WHERE projekte.Id = '.$id;
        return $this->db->query($sql);
    }
}