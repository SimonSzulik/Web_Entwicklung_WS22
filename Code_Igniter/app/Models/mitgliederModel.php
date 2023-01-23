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

    public function edit($id){
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.Id', $id);

        if($_POST['PasswordNew'] != null){
            $password = $_POST['PasswordNew'];
            $hashed_pw = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
            return $this->mitglieder->update(array('Username' => $_POST['username'], 'EMail' => $_POST['Email'], 'Password' => $hashed_pw));
        }
    }

    public function delete_person($id){
        $sql = 'DELETE FROM mitglieder WHERE mitglieder.Id = '.$id;
        return $this->db->query($sql);
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
