<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    use HasFactory;
    protected  $primaryKey = 'participate_id';

    protected $fillable = [
        'present',
        'event_id',
        'user_id',
    ];
}
