<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('user_id');
            $table->text('delv_address');
            $table->string('product_id');
            $table->string('product_price')->nullable();
            $table->string('product_quanty');
            $table->string('apply_disc_code')->nullable();
            $table->string('sub_total');
            $table->string('shipping_amt')->nullable();
            $table->string('tax_amt')->nullable();
            $table->string('order_total');
            $table->string('payment_status')->default('Pending');
            $table->string('final_status')->default('Incomplete');
            $table->string('transaction_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
