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
}
