<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number', 'name', 'phone', 'ville', 'status', 'total', 'item_count'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
        : static::where('order_number', 'like', '%'.$query.'%')
            ->orWhere('name', 'like', '%'.$query.'%')
            ->orWhere('phone', 'like', '%'.$query.'%')
            ->orWhere('ville', 'like', '%'.$query.'%')
            ->orWhere('total', 'like', '%'.$query.'%');
    }
}
