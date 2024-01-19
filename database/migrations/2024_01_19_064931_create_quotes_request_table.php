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
        Schema::create('quotes_request', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('firmName');
            $table->string('contactName');
            $table->string('email');
            $table->string('mobile');
            $table->string('sparePartName');
            $table->string('QuoteNeededBy')->nullable();
            $table->string('budgetStatus')->nullable();
            $table->text('overview')->nullable();
            $table->string('document')->nullable();
            $table->text('userId');
            $table->text('userName');
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
        Schema::dropIfExists('quotes_request');
    }
};
