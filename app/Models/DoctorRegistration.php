<?php
// app/Models/DoctorRegistration.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;  // Ensure this import is included

class DoctorRegistration extends Authenticatable  // Extend Authenticatable for authentication
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'specialization', 'phone_number'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // If you need additional custom methods for doctor authentication, you can define them here
}
