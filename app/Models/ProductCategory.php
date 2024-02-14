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
        'Kategorie_1',
        'Kategorie_2',
        'Kategorie_3',
        'Kategorie_4',
        'Kategorie_5',
        'Kategorie_6',
    ];
}
