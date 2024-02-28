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
        Schema::create('claims__lists', function (Blueprint $table) {
            $table->id();
            $table->string('Claim_Nr');
            $table->date('Claimdatum')->nullable();
            $table->string('Referenz')->nullable();
            $table->string('Ihre_Kundennummer')->nullable();

            // Dynamic table fields
            $table->unsignedInteger('POS');
            $table->string('Produkt')->nullable();
            $table->string('Beschreibung')->nullable();
            $table->string('Menge')->nullable();
            $table->string('Einheit')->nullable();
            $table->string('Einzelpreis')->nullable();
            $table->string('Rabatt')->nullable();
            $table->string('Gesamtpreis')->nullable();

            $table->string('gesamt_netto')->nullable();
            $table->string('zzgl_Umsatzsteuer')->nullable();
            $table->string('Gesamtbetrag_brutto')->nullable();
            $table->string('status')->default('Offen');

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
        Schema::dropIfExists('claims__lists');
    }
};
