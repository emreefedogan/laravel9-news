<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    #one to many

    public function news()
    {
        return $this->hasMany(News::class);

    }


    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function category(){

        return $this->hasMany(News::class);

    }
}
