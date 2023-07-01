<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class price extends Model
{
    use HasFactory;

    // protected $hidden = ["id", "category_id", "created_at", "updated_at"];

    public function getRouteKeyName() 
    {
        return "id";
    }

    public function getTotalProductAttribute() 
    {
        return $this->count();
    }

    public function category()  
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
