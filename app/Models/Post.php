<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'small_description',
        'description',
        'cover',
        'status',
        'meta_title',
        'meta_description',
        'post_id',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->as('tags');
    }
    public function hasTag($name)
    {
        if ($this->tags->where('name', $name)->first()) {
            return true;
        }

        return false;
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}

