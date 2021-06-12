<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Series;

class Series extends Model
{
    use HasFactory;
    protected $table = 'series';
    protected $primaryKey = 'id';

    public function product(){
        return $this->hasOne(Product::class, 'series_id');
    }

    public static function addSeries($req){
        $series = new Series();
        $series->series_name = $req->series_name;
        $series->save();
        return "success";
    }
}
