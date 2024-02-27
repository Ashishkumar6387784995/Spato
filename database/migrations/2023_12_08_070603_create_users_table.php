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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile');
            $table->rememberToken();
            $table->string('action')->nullable();
            $table->string('role')->nullable();
            $table->string('address')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('vatNo')->nullable();
            $table->string('rabatt_Gruppe')->nullable();
            $table->string('Shop_APP')->nullable();
            $table->string('Premium_connection')->nullable();

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
        Schema::dropIfExists('users');
    }
};
