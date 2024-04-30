<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('surgicalprocedures', function (Blueprint $table) {
            $table->unsignedBigInteger('specialty_id')->nullable();

            $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('surgicalprocedures', function (Blueprint $table) {
                $table->dropForeign(['specialty_id']);
            });
        }
        Schema::table('surgicalprocedures', function (Blueprint $table) {
            $table->dropColumn('specialty_id');
        });
    }
};
