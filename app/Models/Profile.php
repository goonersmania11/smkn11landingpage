<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_name',
        'welcome_message',
        'description',
        'principal_name',
        'principal_message',
        'principal_photo',
        'vision',
        'mission',
        'address',
        'phone',
        'email',
    ];
}
