<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
    ];

    // usersテーブルとのリレーションを構築
     public function user()
     {
        return $this->belongsTo(User::class);
     }

    // shopsテーブルとのリレーションを構築
     public function shop()
     {
        return $this->belongsTo(Shop::class);
     }
}
