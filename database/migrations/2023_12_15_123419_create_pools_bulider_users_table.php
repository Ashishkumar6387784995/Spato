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
        Schema::create('poolsBuilders_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('zip_code');
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('password');
            $table->string('vat_no')->nullable();
            $table->string('condition')->nullable();
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
        Schema::dropIfExists('pools_bulider_users');
    }
};
