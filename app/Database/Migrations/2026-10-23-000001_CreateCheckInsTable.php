<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCheckInsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'latitude' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'longitude' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'check_in_time' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('check_ins');
    }

    public function down()
    {
        $this->forge->dropTable('check_ins');
    }
}