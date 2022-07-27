<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id', 'size',
    ];

    public function item()
    {
        return $this->hasMany(ProductOption::class);
    }

    public function gammes()
    {
        return $this->belongsToMany(Gamme::class);
    }
}
