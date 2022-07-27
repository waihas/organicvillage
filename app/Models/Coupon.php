<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'slug', 'amount'
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
        : static::where('id', 'like', '%'.$query.'%')
            ->orWhere('code', 'like', '%'.$query.'%')
            ->orWhere('percent', 'like', '%'.$query.'%');
    }
}
