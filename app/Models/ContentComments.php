<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentComments extends Model
{
    use HasFactory;

    protected $fillable = ['content_id', 'user_id', 'text', 'validated', 'created_at', 'updated_at'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
