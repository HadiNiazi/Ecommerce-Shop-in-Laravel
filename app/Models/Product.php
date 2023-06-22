<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'price'];

    public const PRODUCT_IMAGE = 1;

    // protected $guarded = [];

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }
}
