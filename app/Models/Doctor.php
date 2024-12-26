<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Define the table name if it's different from the plural form of the model
    protected $table = 'doctors';

    // The attributes that are mass assignable
    protected $fillable = ['name', 'email', 'specialization', 'phone_number'];
}
