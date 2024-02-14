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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('company_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zipCode', 10)->nullable();
            $table->string('country')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('profile_picture')->nullable(); // Added profile_picture column
            $table->string('status')->nullable();
            // Create a foreign key for the user_id column
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('user_profiles');
    }
};
