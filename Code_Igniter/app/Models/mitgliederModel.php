<?php

namespace App\Models;
use CodeIgniter\Model;

class mitgliederModel extends Model
{
    public function login(){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('Password');
        $this->mitglieder->where('mitglieder.Username', $_POST['username']);

        return $this->mitglieder->get()->getRowArray();
    }

    public function mitgliedInfos(){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('Id', );
        $this->mitglieder->select('Username');
        $this->mitglieder->select('Email');
        $this->mitglieder->select('inProjekt');
        $this->mitglieder->where('mitglieder.Username', $_POST['username']);

        return $this->mitglieder->get()->getResultArray();
    }

    public function register(){
        $this->mitglieder = $this->db->table('mitglieder');

        $password = $_POST['passwort'];
        $hashed_pw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

        $this->mitglieder->insert(array('Username' => $_POST['username'], 'EMail' => $_POST['email'], 'Password' => $hashed_pw));
    }

    public function getData(): array
    {
        $result = $this->db->query('SELECT * FROM mitglieder ORDER BY Id');
        return $result->getResultArray();
    }
}
