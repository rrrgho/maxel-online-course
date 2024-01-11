<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class ClassModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'classes';
    protected $guarded = [];

    protected $appends = ['your_class'];

    public function class_user_relation()
    {
        return $this->hasMany(ClassUser::class, 'class_id', 'id');
    }

    public function class_leassons_relation()
    {
        return $this->hasMany(ClassLeasson::class, 'class_id', 'id');
    }

    public function class_category_relation()
    {
        return $this->belongsTo(ClassCategory::class, 'category_id', 'id');
    }

    public function class_teacher_relation()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function getYourClassAttribute()
    {
        if (Auth::check()) {
            $data = $this->class_user_relation()
                ->where('user_id', Auth::user()->id)
                ->first();
            if ($data) {
                return $data->status;
            } else {
                return false;
            }
        }
        return false;
    }
}
