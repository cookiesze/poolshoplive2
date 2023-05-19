<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=[

            'fname',
            'sname',
            'slug',
            'line',
            'phone_number',
            'link_register',
            'email',
            'cover',
            'status',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
