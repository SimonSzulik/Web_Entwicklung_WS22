<?php

namespace App\Models;

use CodeIgniter\Model;

class reiterModel extends Model
{
    public function getData(): array
    {
        // Hier passieren Datenbankabfragen für die Reitertabelle
        $result = $this->db->query('SELECT * FROM reiter ORDER BY Id');
        return $result->getResultArray();
    }
}
