<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'discounted_price',
        'description',
        'product_status',
        'category_id',
        'images',
    ];
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // Relationship with ProductImage
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Method to get the first image's URL
    public function getFirstImageUrlAttribute()
    {
        $firstImage = $this->images()->first();
        return $firstImage ? asset('storage/' . $firstImage->image_path) : asset('default-image.png'); // Use a fallback image if no image exists
    }
    public function purchaseProducts()
    {
        return $this->hasMany(PurchaseProduct::class);
    }
}
