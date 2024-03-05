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
        Schema::create('assignments_list', function (Blueprint $table) {
            $table->id();
            $table->string('Auftrags_Nr');
            $table->date('Auftragsdatum')->nullable();
            $table->string('Referenz')->nullable();
            $table->string('Ihre_Kundennummer')->nullable();
            $table->string('Ihre_Ust_ID')->nullable();

            // Dynamic table fields
            $table->unsignedInteger('POS');
            $table->string('Produkt')->nullable();
            $table->string('Beschreibung', '2000')->nullable();
            $table->string('Menge')->nullable();
            $table->string('Einheit')->nullable();
            $table->string('Einzelpreis')->nullable();
            $table->string('Rabatt')->nullable();
            $table->string('Gesamtpreis')->nullable();

            $table->string('gesamt_netto')->nullable();
            $table->string('zzgl_Umsatzsteuer')->nullable();
            $table->string('Gesamtbetrag_brutto')->nullable();

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
        Schema::dropIfExists('assignments_list');
    }
};
