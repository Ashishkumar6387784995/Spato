<?php

namespace App\Models\FrontEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolBuilders_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'zip_code',
        'email',
        'contact',
        'password',
        'vat_no',
    ];

    protected $table = "poolsBuilders_users";
}
