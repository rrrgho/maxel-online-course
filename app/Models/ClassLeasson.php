<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class ClassLeasson extends Model
{
    use HasFactory;
    protected $table = 'class_lessons';
    protected $guarded = [];
    protected $appends = ['completed'];

    public function leasson_complete_relation(){
        return $this->hasMany(LeassonComplete::class, 'leasson_id', 'id');
    }

    public function getCompletedAttribute(){
        if(!Auth::check()) return NULL;
        return $this->leasson_complete_relation()->where('user_id', Auth::user()->id)->first() ?? NULL;
    }
}
