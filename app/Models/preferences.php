<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preferences extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'password',
        'language',
        'edit_profile'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
