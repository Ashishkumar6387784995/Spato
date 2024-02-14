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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('Kategorie_Nr');
            $table->text('Kategorie_1');
            $table->text('Kategorie_2');
            $table->text('Kategorie_3');
            $table->text('Kategorie_4')->nullable();
            $table->text('Kategorie_5')->nullable();
            $table->text('Kategorie_6')->nullable(); 
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
        Schema::dropIfExists('product_categories');
    }
};
