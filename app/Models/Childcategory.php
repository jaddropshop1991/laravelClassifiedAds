<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;

class Childcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'subcategory_id', 'slug'];

    public function subcategory(){
        return $this->belongsTo(Subcategory::class, 'subcategory_id','id');
    }




    //get childcategory_id base on childcategory slug
    public function getRouteKeyName(){
        return 'slug';
    }

    public function ads(){
        return $this->hasMany(Advertisment::class);
    }
}