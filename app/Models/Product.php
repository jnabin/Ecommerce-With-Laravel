<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";
    public $timestamps = true;

    public function sale(){
        return $this->belongsTo(Sale::class, 'sales_id');
    }

    public function mainCategory(){
        return $this->belongsTo(MainCategory::class, 'mainCategory_id');
    }

    public function subCategory(){
        return $this->belongsTo(SubCategory::class, 'subCategory_id');
    }

    public function finalSubCategory(){
        return $this->belongsTo(FinalSubCategory::class, 'finalSubCategory_id');
    }

    public function series(){
        return $this->belongsTo(Series::class, 'series_id');
    }
}


