<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $table = "mainCategory";
    protected $primaryKey = "id";

    public function subCategories(){
        return $this->hasMany(SubCategory::class, 'mainCategory_id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'mainCategory_id');
    }
}
