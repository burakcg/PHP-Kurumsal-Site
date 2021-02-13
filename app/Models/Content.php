<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function menu(){

        return $this->belongsTo(Menu::class);
    }

    public function comments(){

        return $this->hasMany(ContentComments::class, 'content_id');
    }

}
