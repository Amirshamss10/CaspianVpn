<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = ["status", "trans_id", "order_id", "amount", "card_holder", "shaparak_Ref_Id", "created_at"];
}
