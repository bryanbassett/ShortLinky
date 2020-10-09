<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clicks extends Model
{
    protected $fillable = [
        'linkid', 'clicks'
    ];
}
