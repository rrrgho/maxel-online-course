<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicClassPriceList extends Model
{
    use HasFactory;
    protected $table = 'basic_class_price_lists';
    protected $guarded = [];

    protected $appends = ['feature'];

    public function feature_realtion(){
        return $this->hasMany(BasicClassPriceListFeature::class, 'pricelist_id', 'id');
    }

    public function getFeatureAttribute(){
        return $this->feature_realtion()->get();
    }
}
