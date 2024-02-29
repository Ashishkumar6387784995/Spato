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
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->id();
            $table->string('Lieferschein_Nr');
            $table->date('Lieferdatum')->nullable();
            $table->string('Referenz')->nullable();
            $table->string('Ihre_Kundennummer')->nullable();
            $table->string('Ihre_Ust_ID')->nullable();

            // Dynamic table fields
            $table->unsignedInteger('POS');
            $table->string('Produkt')->nullable();
            $table->string('Beschreibung')->nullable();
            $table->string('Menge')->nullable();
            $table->string('Einheit')->nullable();

            $table->string('calculate_status')->default('Offen');
            $table->string('changedDeliveryAddress')->default('NULL');
            $table->string('serialNo')->default('NULL');
            $table->string('addInformation')->default('NULL');
            $table->string('deliveryStatus')->default('Offen');
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
        Schema::dropIfExists('delivery_notes');
    }
};
