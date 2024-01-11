<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassUser extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'class_users';
    protected $guarded = [];


    public function class_relation(){
        return $this->belongsTo(ClassModel::class, 'class_id', 'id');
    }

    public function user_relation(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
}
