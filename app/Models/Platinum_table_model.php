<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platinum_table_model extends Model
{
    use HasFactory;

    protected $table = 'plantinumtable';

    protected $fillable = [
        'table_name',
        'table_number'
    ];
}
