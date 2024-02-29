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
            $table->string('Kategorie_1')->nullable();
            $table->string('Kategorie_2')->nullable();
            $table->string('Kategorie_3')->nullable();
            $table->string('Kategorie_4')->nullable();
            $table->string('Kategorie_5')->nullable();
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
            $table->string('Beschreibung_kurz', 1000)->nullable();
            $table->string('Beschreibung_lang', 20000)->nullable();

            $table->string('m3/h')->nullable();
            $table->string('Stichmass')->nullable();
            $table->string('kW')->nullable();
            $table->string('Volt')->nullable();
            $table->string('Kelvin')->nullable();
            $table->string('lm')->nullable();
            $table->string('Druckstufe_PN')->nullable();
            $table->string('Material')->nullable();
            $table->string('Körnung/h')->nullable();
            $table->string('Durchmesser')->nullable();
            $table->string('Radius')->nullable();


            $table->string('Gewicht')->nullable();
            $table->string('Länge')->nullable();
            $table->string('Breite')->nullable();
            $table->string('Höhe')->nullable();


            $table->string('Bild_1')->nullable();
            $table->string('Bild_2')->nullable();
            $table->string('Bild_3')->nullable();
            $table->string('Bild_4')->nullable();
            $table->string('Anleitung_PDF_1')->nullable();
            $table->string('Anleitung_PDF_2')->nullable();
            $table->string('Anleitung_PDF_3')->nullable();

            // $table->string('images');

            $table->string('addedBy')->nullable();
            $table->string('status')->default('active');

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
        Schema::dropIfExists('product_');
    }
};
