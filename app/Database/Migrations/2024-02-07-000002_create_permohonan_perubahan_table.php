<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermohonanPerubahanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'student_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'perubahan_diminta' => [
                'type' => 'TEXT',
            ],
            'alasan' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => 'menunggu',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('student_id', 'students', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('permohonan_perubahan');
    }

    public function down()
    {
        $this->forge->dropTable('permohonan_perubahan');
    }
}
