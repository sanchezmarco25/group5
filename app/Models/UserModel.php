<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'role', 'department', 'first_name', 'middle_name', 'last_name', 
        'birthdate', 'gender', 'email', 'phone_number', 'address', 
        'username', 'password'
    ];
    protected $useTimestamps = true;

    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}