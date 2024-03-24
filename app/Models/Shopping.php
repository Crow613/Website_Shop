<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    protected $fillable = [

        "productId",
        'ProductImg',
        "productName",
        "productQuantity",
        "productPrise",

    ];
}
