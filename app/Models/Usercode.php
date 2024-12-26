<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Import Authenticatable class
use Illuminate\Notifications\Notifiable;

class Usercode extends Authenticatable
{
    use Notifiable;

    // Table name (optional if it's 'users')
    protected $table = 'users';

    // Fillable fields (allows mass-assignment)
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',      // For admin role
        'is_active',  // To track active users
    ];

    // Hidden fields (not visible in arrays or JSON)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast fields to specific types
    protected $casts = [
        'email_verified_at' => 'datetime',  // Cast email_verified_at to a datetime
        'admin' => 'boolean',              // Cast admin to a boolean
        'is_active' => 'boolean',          // Cast is_active to a boolean
    ];

    // Optional: Define accessor for a user's full name if needed
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
