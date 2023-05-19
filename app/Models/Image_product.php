<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image_product extends Model
{
    use HasFactory;
    protected $fillable=[
        'image_etc',
        'product_id',
    ];




    public function products(){
        return $this->belongsTo(Product::class);
    }
}
