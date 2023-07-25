<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class price extends Model
{
    use HasFactory;

    protected $fillable = ["category_id", "price", "title"];

    protected $appends = ["total_Product"];

    public function getRouteKeyName() 
    {
        return "id";
    }

    public function getTotalProductAttribute() 
    {
        return $this::all()->count();
    }

    public function category()  
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
