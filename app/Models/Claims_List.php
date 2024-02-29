<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claims_List extends Model
{
    use HasFactory;

    protected $table = 'claims_lists';

    protected $fillable = [
        'Claim_Nr',
        'Claimdatum',
        'Referenz',
        'Ihre_Kundennummer',
        'Ihre_Ust_ID',
        'POS',
        'Produkt',
        'Beschreibung',
        'Menge',
        'Einheit',
        'supplier_number',
        'Seriennummer',
        'Fehlerbeschreibung',
        'imageUpload',
        'document',
        'status',
        'created_by',
    ];
}
