<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends \CodeIgniter\Database\Migration
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
            'name' => [
                'type' => 'TEXT',
                'constraint' => '100'
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 25,
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'thumbnail' => [
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
        $this->forge->createTable('product');
    }

    public function down()
    {

        $this->forge->dropTable('product');
    }
}
