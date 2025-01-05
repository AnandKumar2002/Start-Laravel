<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Define a one-to-one relationship with the Product model.
     */
    public function product()
    {
        return $this->hasOne(Product::class);
        // return $this->hasOne(Product::class, 'seller_id'); // IF NOT MATCH THE NAME OF THE COLUMN THEN !....!
    }

    /**
     * Define a one-to-many relationship with the Product model.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
