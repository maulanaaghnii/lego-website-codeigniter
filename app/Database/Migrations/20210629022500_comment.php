<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comment extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'id_product' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE

            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'comment' => [
                'type' => 'TEXT',

            ],


            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,

            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_product', 'product', 'id');
        $this->forge->createTable('comment');
    }

    public function down()
    {

        $this->forge->dropTable('comment');
    }
}
