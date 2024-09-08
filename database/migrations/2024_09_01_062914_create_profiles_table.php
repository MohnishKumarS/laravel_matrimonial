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
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('profile_id');
            $table->string('name');
            $table->string('image')->nullable(); 
            $table->string('mobile')->nullable(); 
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('community')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('raasi')->nullable();
            $table->string('star')->nullable();
            $table->string('dosham')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
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
