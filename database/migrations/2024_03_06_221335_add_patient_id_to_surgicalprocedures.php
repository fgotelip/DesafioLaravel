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
        Schema::table('surgicalprocedures', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surgicalprocedures', function (Blueprint $table) {
            $table->dropForeign(['patient_id']);
        });
    }
};
