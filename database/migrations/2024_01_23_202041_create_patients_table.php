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
            #$table->longblob('pic')->nullable();
            /*
            $table->integer('hcpname')-unsigned();
            $table->foreign('hcpname')->references('id')->on('')->onDelete('cascade')->onUpdate('cascade');
             - falta criar a tabela
            */
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
