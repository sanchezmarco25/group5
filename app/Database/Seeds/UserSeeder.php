<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role'         => 'admin',
                'department'   => 'Administration',
                'first_name'   => 'Katherine',
                'middle_name'  => 'Olap',
                'last_name'    => 'Sinagaraw',
                'birthdate'    => '1990-07-01',
                'gender'       => 'Female',
                'email'        => 'katherine.sinagaraw@sunsonsolar.com',
                'phone_number' => '09291230983',
                'address'      => 'Pasig City',
                'username'     => 'KittyKat16',
                'password'     => password_hash('K@tSunShine16', PASSWORD_DEFAULT),
            ],
            [
                'role'         => 'admin',
                'department'   => 'IT',
                'first_name'   => 'Sol',
                'middle_name'  => 'Sun',
                'last_name'    => 'Solis',
                'birthdate'    => '1967-01-08',
                'gender'       => 'Male',
                'email'        => 'sol.solis@sunsonsolar.com',
                'phone_number' => '09291230983',
                'address'      => 'Pasig City',
                'username'     => 'admin',
                'password'     => password_hash('admin123', PASSWORD_DEFAULT),
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}