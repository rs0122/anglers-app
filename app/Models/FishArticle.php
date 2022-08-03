<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FishArticle extends Model
{
    use HasFactory;

    // Userモデルへの関連付け
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
