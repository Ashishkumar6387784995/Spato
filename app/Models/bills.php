<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;

    protected $table = 'bills_list';

    protected $fillable = [
        'Rechnungs_Nr',
        'Rechnungsdatum',
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
