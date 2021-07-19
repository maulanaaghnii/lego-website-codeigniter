<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'price', 'stock', 'thumbnail', 'created_by', 'created_date', 'updated_by', 'updated_date'
    ];

    protected $returnType = 'App\Entities\Product';
    protected $userTimestamps = false;
}
