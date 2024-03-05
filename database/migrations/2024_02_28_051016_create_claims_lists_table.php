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
        Schema::create('claims_lists', function (Blueprint $table) {
            $table->id();
            $table->string('Claim_Nr');
            $table->date('Claimdatum')->nullable();
            $table->string('Referenz')->nullable();
            $table->string('Ihre_Kundennummer')->nullable();
            $table->string('Ihre_Ust_ID')->nullable();

            // Dynamic table fields
            $table->unsignedInteger('POS');
            $table->string('Produkt')->nullable();
            $table->string('Beschreibung', '2000')->nullable();
            $table->string('Menge')->nullable();
            $table->string('Einheit')->nullable();

            // for more info
            $table->string('supplier_number')->nullable();
            $table->string('Seriennummer')->nullable();
            $table->string('Fehlerbeschreibung')->nullable();
            $table->string('imageUpload')->nullable();
            $table->string('document')->nullable();
            $table->string('status')->default('Offen');
            $table->string('created_by');

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
        Schema::dropIfExists('claims_lists');
    }
};
