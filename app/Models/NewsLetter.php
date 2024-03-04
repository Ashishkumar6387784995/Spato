<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    use HasFactory;

    protected $table = 'news_letters';

    protected $fillable = [
        'Newsletter_Nr',
        'Newsletterdatum',
        'Kunden',
        'POS',
        'Produkt',
        'Produktname',
        'Beschreibung',
        'Produktimage',
        'Einzelpreis',
        'PDF_Datei',
        'greeting_info',
        'sell_info',
        'free_text'
    ];
}
