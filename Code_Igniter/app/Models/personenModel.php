<?php

namespace App\Models;

use CodeIgniter\Model;

class personenModel extends Model
{
    public function getData(): array
    {
        $result = $this->db->query('SELECT * FROM mitglieder ORDER BY Username');
        return $result->getResultArray();
    }
}
