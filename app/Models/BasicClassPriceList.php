<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicClassPriceList extends Model
{
    use HasFactory;
    protected $table = 'basic_class_price_lists';
    protected $guarded = [];
}
