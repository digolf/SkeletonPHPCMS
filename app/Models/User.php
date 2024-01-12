<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;
use Config\Database;

class User extends Model
{
    private const __tableName = 'user';
    private const __tablePk = 'id';

    public function __construct(?ConnectionInterface $db = null, ?ValidationInterface $validation = null)
    {
        parent::__construct($db, $validation);
        $this->$db = \Config\Database::connect();
        $this->builder = $this->$db->table('user');
    }

    public function get($data) {
        $where = "email = '". $data['email'] . "' OR phone = '" . $data['phone'] ."'";
        $this->builder->where($where);
        $response = $this->builder->get();
        return $response->getResult();
    }

    public function getById($id) {
        $this->builder->where('id = '. $id);
        $response = $this->builder->get();
        return $response->getRow();
    }

    public function getByEmail($email) {
        $this->builder->where("email = '". $email . "'");
        $response = $this->builder->get();
        return $response->getRow();
    }

    public function getAll() {
        $response = $this->builder->get();
        return $response->getResult();
    }

    public function insertNewUser($data) {
        $this->builder->set('username', $data['name']);
        $this->builder->set('email', $data['email']);
        $this->builder->set('phone', $data['phone']);
        $this->builder->set('password', md5($data['new_pass'] . ENCRYPTION_KEY));
        $this->builder->set('active', 1);

        $response = $this->builder()->insert();
        return $response;
    }

    public function edit($data, $userId) {
        if (!empty($data['name'])) {
            $this->builder->set('username', $data['name']);
        }

        if (!empty($data['email'])) {
            $this->builder->set('email', $data['email']);
        }

        if (!empty($data['phone'])) {
            $this->builder->set('phone', $data['phone']);
        }

        if (!empty($data['new_pass'])) {
            $this->builder->set('password', md5($data['new_pass'] . ENCRYPTION_KEY));
        }

        if (!empty($data['active'])) {
            $this->builder->set('active', $data['active']);
        }

        if (!empty($data['level'])) {
            $this->builder->set('level', $data['level']);
        }

        $this->builder->where('id =' . $userId);
        $response = $this->builder()->update();

        return $response;
    }

    public function deleteUser($userId) {
        $this->builder->where('id = ' . $userId);
        $response = $this->builder->delete();
        return $response;
    }
}
