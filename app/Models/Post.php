<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'essence'
    ];

    public function getByUserId(int $userId) {
        return static::query()
            ->with(['user'])
            ->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
