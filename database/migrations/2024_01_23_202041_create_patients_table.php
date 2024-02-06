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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('wasbornat')->nullable();
            $table->string('address')->nullable();
            $table->string('tell')->nullable();
            $table->string('cpf')->nullable();
            $table->string('typeofblood')->nullable();
            $table->binary('pic')->nullable();
            //$table->unsignedBigInteger('hcp_id')->nullable(); 
            //$table->foreign('hcp_id')->references('id')->on('healthcareplans')->onDelete('cascade')->onUpdate('cascade'); 
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
