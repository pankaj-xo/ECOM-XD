<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    public function orders()
    {
        return $this->belongsToMany(Orders::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function ratings(){
        return $this->belongsToMany(User::class)->withPivot('rating');
    }
}