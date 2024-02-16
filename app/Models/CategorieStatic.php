<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieStatic extends Model
{
    use HasFactory;

    
    protected $table = 'categorie_statics';
    protected $fillable = ['categorie_1', 'categorie_2', 'categorie_3', 'imageFile'];
    protected $primaryKey = 'id';
}
