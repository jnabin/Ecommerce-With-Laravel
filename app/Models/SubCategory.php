<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = "subCategories";
    protected $primaryKey = "id";
    
    public function finalSubCategories(){
        return $this->hasMany(FinalSubCategory::class, 'subCategory_id');
    }
}
