<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true, // Fulfills Sol's requirement for a primary key
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['admin', 'employee', 'technician', 'customer'],
                'default'    => 'customer',
            ],
            'department' => [
                'type'       => 'ENUM',
                'constraint' => ['Administration', 'IT', 'Dispatch', 'Accounting', 'HR', 'Marketing', 'Sales', 'Customer Service', 'None'],
                'default'    => 'None', // Fulfills the requested department list
            ],
            'first_name'   => ['type' => 'VARCHAR', 'constraint' => 100],
            'middle_name'  => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'last_name'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'birthdate'    => ['type' => 'DATE'],
            'gender'       => ['type' => 'VARCHAR', 'constraint' => 20],
            'email'        => ['type' => 'VARCHAR', 'constraint' => 150, 'unique' => true],
            'phone_number' => ['type' => 'VARCHAR', 'constraint' => 20],
            'address'      => ['type' => 'TEXT'],
            'username'     => ['type' => 'VARCHAR', 'constraint' => 50, 'unique' => true],
            'password'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
            'updated_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}