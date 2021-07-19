<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_product', 'id_customer', 'quantity', 'total_price', 'address', 'shiping_costs', 'status', 'created_by', 'created_date', 'updated_by', 'updated_date'
    ];

    protected $returnType = 'App\Entities\Transaction';
    protected $userTimestamps = false;
}
