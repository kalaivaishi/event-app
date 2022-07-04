<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customermodel extends Model
{
    use HasFactory;
    protected $table = 'customer';

    protected $fillable = [
        'customer_name',
        'email'
    ];
}
