<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =
        [
        'delivery_method_id',
        'user_id',
        'total_price'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
