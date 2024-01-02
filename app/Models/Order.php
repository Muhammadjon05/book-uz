<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'user_id',
            'total_price',
            'region_id',
            'district_id',
            'delivery_method_id',
            'street',
            'longitude',
            'latitude',
            'customer_firstname',
            'customer_lastname',
            'phone_number',

        ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
