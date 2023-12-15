<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'Hersteller',
        'Herst_Nr',
        'Lief_Art_Nr',
        'Hersteller_Artikelnummer',
        'descriKatalog_Art_Nummertion',
        'Katalog_Art_Nummer',
        'Kategorie',
        'VE_VPE',
        'Einheit',
        'Rabattcode_1',
        'Rabattcode_2',
        'Rabattcode_3',
        'Preis_zzgl_MwSt',
        'Preis_inkl_MwSt',
        'Einkausfpreis_zzgl_MwSt',
        'Einkaufsrabatt',
        'Artikelname',
        'Beschreibung_kurz',
        'Beschreibung_lang',
        'images',
        'addedBy',
        
    ];

        protected $table = 'products';
}

