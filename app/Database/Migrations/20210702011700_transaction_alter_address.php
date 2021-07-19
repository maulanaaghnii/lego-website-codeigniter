<?php

namespace App\Database\Migrations;

class TransactionAlterAddress extends \CodeIgniter\Database\Migration
{
    public function up()
    {
        $fields = [
            'address' => [
                'type' => 'TEXT'
            ],
            'shiping_costs' => [
                'type' => 'INT'
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
            ],

        ];

        $this->forge->addColumn('transaction', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('transaction', ['addres', 'shiping_costs', 'status']);
    }
}
