<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'order_id',
        'user_id',
        'delv_address',
        'product_id',
        'product_price',
        'product_quanty',
        'apply_disc_code',
        'sub_total',
        'shipping_amt',
        'tax_amt',
        'order_total',
        'payment_status',
    ];
}
