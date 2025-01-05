<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name', 'seller_id', 'price'];

    /**
     * Define the inverse of the Many-to-One relationship with products.
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
