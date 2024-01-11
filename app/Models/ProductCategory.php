<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = [
        'Kategorie_Nr',
        'Kategorie_datum',
        'Kategorie_Name',
        'Kategorie_Beschreibung',
        'imageFile',
    ];
}
