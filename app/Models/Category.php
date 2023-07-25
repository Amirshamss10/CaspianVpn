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

    public $name = "AmirShams";
    
    public function getRouteKeyName() 
    {
        return "id";
    }


    public function prices()
    {
        return $this->hasMany(price::class);
    } 

}
