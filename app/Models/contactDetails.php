<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','phone_number', 'email', 'street', 'postcode','city'
    ];

}
