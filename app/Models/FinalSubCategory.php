<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalSubCategory extends Model
{
    use HasFactory;

    protected $table = "finalSubCategories";
    protected $primaryKey = "id";

    public function products(){
        return $this->hasMany(Product::class, 'finalSubCategory_id');
    }
}
