<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends \CodeIgniter\Database\Migration
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
            'id_customer' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'total_price' => [
                'type' => 'INT',
                'constraint' => 11,
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
        $this->forge->addForeignKey('id_customer', 'user', 'id');
        $this->forge->addForeignKey('id_product', 'product', 'id');
        $this->forge->createTable('transaction');
    }

    public function down()
    {

        $this->forge->dropTable('transaction');
    }
}
