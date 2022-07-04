<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'dob',
        'phone_number'
    ];
}
