<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $fillable = [
        'deliveryStatus', 'calification', 'deliveryDate', 'coments', 'file' ,'user_id','task_id'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function task(){
        return $this->belongsTo('App\Models\Task');
    }
}
