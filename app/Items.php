<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
   protected $fillable = [
        'codeno','name', 'price','discount','photo','description','brand_id','subcategory_id'
    ];
}
