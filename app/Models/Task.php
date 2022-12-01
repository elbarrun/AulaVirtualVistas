<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'date','user_id'
    ];

    public function user(){
        return $this->hasMany('App\Models\Exercise');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
