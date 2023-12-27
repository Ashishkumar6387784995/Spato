<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments_list extends Model
{
    use HasFactory;

    protected $table = 'assignments_list';

    protected $fillable = [
        'Auftrags_Nr',
        'Angebotsdatum',
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
