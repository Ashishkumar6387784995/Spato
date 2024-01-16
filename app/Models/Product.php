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
        'Kategorie_1',
        'Kategorie_2',
        'Kategorie_3',
        'Kategorie_4',
        'Kategorie_5',

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
      
        'addedBy',


        'm3/h',
        'Stichmass',
        'kW',
        'Volt',
        'Kelvin',
        'lm',
        'Druckstufe_PN',
        'Material',
        'Körnung',
        'Durchmesser',
        'Radius',
        'Gewicht',
        'Länge',
        'Breite',
        'Höhe',
        'Bild_1',
        'Bild_2',
        'Bild_3',
        'Bild_4',
        'Anleitung_PDF_1',
        'Anleitung_PDF_2',
        'Anleitung_PDF_3',
    

        
    ];

        protected $table = 'products';

        
}

