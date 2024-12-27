<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['supplier_id'];

    public function products()
    {
        return $this->hasMany(PurchaseProduct::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
