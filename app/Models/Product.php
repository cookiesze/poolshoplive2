<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'product_code',
        'barcode',
        'use',
        'dimension',
        'made',
        'small_description',
        'description',
        'image_dimension',
        'image',
        'status',
        'meta_title',
        'meta_description',
        'category_id',
        'product_id',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function image_products(){
        return $this->hasMany('App\Models\Image_product');
    }
}

