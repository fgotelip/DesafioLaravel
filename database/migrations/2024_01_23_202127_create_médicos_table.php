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
        Schema::create('médicos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('wasbornat');
            $table->string('adress');
            $table->string('tell');
            $table->string('cpf');
            $table->time('workhours');
            $table->integer('crm');
            #$table->longblob('pic')->nullable();
            /*
            $table->integer('specialtyname')-unsigned();
            $table->foreign('specialtyname')->references('name')->on('')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('médicos');
    }
};
