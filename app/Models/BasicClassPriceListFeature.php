<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicClassPriceListFeature extends Model
{
    use HasFactory;
    protected $table = 'pricelist_features';
    protected $guarded = [];
}
