<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookform_model extends Model
{
    use HasFactory;

    protected $table = 'bookform';

    protected $fillable = [
        'seats_selected',
        'total_member',
        'name',
        'email',
        'phone',
        'id_proof',
        'organization_name',
        'message',
        'status'
    ];
}
