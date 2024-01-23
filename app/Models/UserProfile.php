<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'permanent_address',
        'city',
        'zipCode',
        'country',
        'profile_picture',
        'user_id',
        'status'
    ];
    protected $table= 'user_profiles';

}
