<?php

namespace App\Models;

use App\Models\price;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["title"];

    protected $hidden = ["id", "created_at", "updated_at"];

    public function getRouteKeyName() 
    {
        return "id";
    }


    public function prices(): HasMany
    {
        return $this->hasMany(price::class, "category_id");
    } 

}
