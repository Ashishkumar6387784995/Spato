<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credits extends Model
{
    use HasFactory;

    protected $table = 'credits_list';

    protected $fillable = [
        'Gutschrifts_Nr',
        'Gutschriftsdatum',
        'Referenz',
        'Ihre_Kundennummer',
        'Ihre_Ust_ID',
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
    ];
}
