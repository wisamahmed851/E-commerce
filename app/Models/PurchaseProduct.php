<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model
{
    protected $fillable = [
        'product_id',
        'supplier_id',
        'purchase_price',
        'discount',
        'final_price',
        'quantity',
        'total_cost'
    ];
}

