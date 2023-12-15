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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('Hersteller')->nullable();
            $table->string('Herst_Nr')->nullable();
            $table->string('Lief_Art_Nr')->nullable();
            $table->string('Hersteller_Artikelnummer')->nullable();
            $table->string('Katalog_Art_Nummer')->nullable();
            $table->string('Kategorie')->nullable();
            $table->string('VE_VPE')->nullable();
            $table->string('Einheit')->nullable();
            $table->string('Rabattcode_1')->nullable();
            $table->string('Rabattcode_2')->nullable();
            $table->string('Rabattcode_3')->nullable();
            $table->string('Preis_zzgl_MwSt')->nullable();
            $table->string('Preis_inkl_MwSt')->nullable();
            $table->string('Einkausfpreis_zzgl_MwSt')->nullable();
            $table->string('Einkaufsrabatt')->nullable();
            $table->string('Artikelname')->nullable();
            $table->string('Beschreibung_kurz')->nullable();
            $table->string('Beschreibung_lang')->nullable();
            $table->string('images');
            $table->string('addedBy');
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
        Schema::dropIfExists('products');
    }
};
