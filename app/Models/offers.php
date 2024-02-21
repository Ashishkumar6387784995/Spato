<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    use HasFactory;

    protected $table = 'offers_list';

    protected $fillable = [
        'Angebots_Nr',
        'Angebotsdatum',
        'Referenz',
        'Ihre_Kundennummer',
        'POS',
        'Produkt',
        'Beschreibung',
        'Menge',
        'Einheit',
        'Einzelpreis',
        'Rabatt',
        'Gesamtpreis',
        'gesamt_netto',
        'zzgl_Umsatzsteuer',
        'Gesamtbetrag_brutto',
        'status',
    ];
}
