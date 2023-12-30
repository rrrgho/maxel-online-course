<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicClassUser extends Model
{
    use HasFactory;
    protected $table = 'basic_class_user';
    protected $guarded = [];

    public function user_relation(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
