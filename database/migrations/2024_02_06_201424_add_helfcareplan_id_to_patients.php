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
        Schema::table('patients', function (Blueprint $table) {
            $table->unsignedBigInteger('helfcareplan_id')->nullable();

            $table->foreign('helfcareplan_id')->references('id')->on('helfcareplans')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('patients', function (Blueprint $table) {
                $table->dropForeign(['helfcareplan_id']);
            });
        }
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('helfcareplan_id');
        });
    }
};
