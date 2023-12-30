<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Author extends Model
{
    use HasFactory;
    protected $fillable = ["full_name","date_of_birth","date_of_death"];


    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
    public function delivery_method()
    {
        return $this->belongsTo(Delivery_method::class);
    }
}
