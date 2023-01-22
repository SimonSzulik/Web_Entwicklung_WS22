<?php

namespace App\Models;
use CodeIgniter\Model;

class mitgliederModel extends Model
{
    public function login()
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
        $this->personen->where('mitglieder.Username', $_POST['username']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function register(){
        $this->mitglieder = $this->db->table('mitglieder');

        $password = $_POST['password'];
        $hashed_pw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

        return $this->mitglieder->insert(array('Username' => $_POST['username'], 'EMail' => $_POST['email'], 'Password' => $hashed_pw));
    }

    public function getPersonen($mitglieder_id = NULL)
    {
        $this->mitglieder = $this->db->table('mitglieder');

        if ($mitglieder_id != NULL){
            $this->mitglieder->where('mitglieder.Id', $mitglieder_id);
        }

        $this->mitglieder->orderBy('Username');
        $result = $this->mitglieder->get();

        if ($mitglieder_id != NULL){
            return $result->getRowArray();
        } else{
            return $result->getResultArray();
        }
    }

    public function edit($id){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.Id', $id);

        if($_POST['password'] != null){
            $password = $_POST['password'];
            $hashed_pw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
            return $this->mitglieder->update(array('Username' => $_POST['username'], 'EMail' => $_POST['email'], 'Password' => $hashed_pw));
        }else{
            return $this->mitglieder->update(array('Username' => $_POST['username'], 'EMail' => $_POST['email'], 'Password' => $_POST['password']));
        }
    }

    public function getAlleMitglieder(): array
    {
        $result = $this->db->query('SELECT * FROM mitglieder ORDER BY Id');
        return $result->getResultArray();
    }

    public function getOneData($Id): array
    {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('Id', );
        $this->mitglieder->select('Username');
        $this->mitglieder->select('EMail');
        $this->mitglieder->select('inProjekt');
        $this->mitglieder->where('mitglieder.Id', $Id);

        return $this->mitglieder->get()->getResultArray();
    }
}
