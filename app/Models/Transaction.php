<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'table_transactions';
    protected $fillable = ['total_amount', 'payment_method'];

    public function details(){
        return $this->hasMany(TransactionDetail::class);
    }

}
