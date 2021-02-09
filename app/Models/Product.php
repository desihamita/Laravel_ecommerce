<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','product_name', 'price', 'desc', 'image'];
    
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
