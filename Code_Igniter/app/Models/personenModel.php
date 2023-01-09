<?php

namespace App\Models;

use CodeIgniter\Model;

class personenModel extends Model
{
    public function getData(): array
    {
        // Hier passieren Datenbankabfragen für die Personentabelle
        $result = $this->db->query('SELECT * FROM mitglieder ORDER BY Id');
        return $result->getResultArray();
    }
}
