<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   
    protected $fillable = [
        "depart_date"  ,
        "depart_time"  ,
        "arrival_date"  ,
        "arrival_time" ,
        "status" ,
        "itinerary" ,
        "location" ,
        "fly_ref" ,
        "price" , 
        "file"  ,
        "description"
    ];
}
