<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = [
        'officialName', 'name', 'shortName', 'img', 'logo', 'slogan', 'email', 'phone', 'phone2', 'phone3', 'address', 'support', 'website', 'active'

    ];
}
