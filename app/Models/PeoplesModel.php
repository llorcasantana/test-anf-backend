<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeoplesModel extends Model
{
    use HasFactory;
    protected $table = 'peoples';
    protected $fillable = [
        'user',
        'last_name',
        'age',
        'gender',
        'email',
    ];
}
