<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku_master extends Model
{
    use HasFactory;
    
    
    public function cart_user() {
        return $this->belongsToMany('App\Models\User');
    }
    
}
