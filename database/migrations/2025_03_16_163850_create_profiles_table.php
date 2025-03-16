<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Foreign key to the users table
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob')->nullable();
            $table->string('nationality');
            $table->text('address');
            $table->string('post_code');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('phone_number');
            $table->string('university_name')->nullable();;
            $table->year('start_year')->nullable();;
            $table->year('finish_year')->nullable();;
            $table->string('id_card_front')->nullable();  // Path for the ID card front
            $table->string('id_card_back')->nullable();   // Path for the ID card back
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
