<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable=["id","title","keywords","description","status","created_at","updated_at","image","menu_id","user_id","detail",];
}
