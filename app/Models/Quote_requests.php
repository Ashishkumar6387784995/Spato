<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote_requests extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'firmName',
        'contactName',
        'email',
        'mobile',
        'sparePartName',
        'QuoteNeededBy',
        'budgetStatus',
        'overview',
        'document',
        'userId',
        'userName',
    ];
    protected $table='quotes_request';
}
