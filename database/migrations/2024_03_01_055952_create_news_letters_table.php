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
        Schema::create('news_letters', function (Blueprint $table) {
            $table->id();
            $table->string('Newsletter_Nr');
            $table->date('Newsletterdatum');
            $table->string('Kunden');
            
            // Dynamic table fields
            $table->unsignedInteger('POS');
            $table->string('Produkt');
            $table->string('Produktname')->nullable();
            $table->string('Beschreibung', '2000')->nullable();
            $table->string('Produktimage')->nullable();
            $table->string('Einzelpreis')->nullable();

            // more info
            $table->string('PDF_Datei')->nullable();
            $table->string('greeting_info', 1000)->nullable();
            $table->string('sell_info', 1000)->nullable();
            $table->string('free_text', 1000)->nullable();

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
        Schema::dropIfExists('news_letters');
    }
};
