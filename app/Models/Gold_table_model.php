<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gold_table_model extends Model
{
    use HasFactory;
    protected $table = 'goldtable';

    protected $fillable = [
        'table_name',
        'table_number'
    ];
}
