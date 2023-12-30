<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_method extends Model
{
    use HasFactory;
    protected $fillable =["name","price","estimated_time"];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
