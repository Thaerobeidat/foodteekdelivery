<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone', 'address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

