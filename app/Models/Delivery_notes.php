<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_notes extends Model
{
    use HasFactory;

    protected $table = 'delivery_notes';

    protected $fillable = [
        'Lieferschein_Nr',
        'Lieferdatum',
        'Referenz',
        'Ihre_Kundennummer',
        'Ihre_Ust_ID',
        'POS',
        'Produkt',
        'Beschreibung',
        'Menge',
        'Einheit',
        
    ];
}
