<?php

use Illuminate\Support\Facades\DB;
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
       Schema::create('surgicalprocedures', function (Blueprint $table) {
            $table->id();
            $table->dateTime('inicialtime');
            $table->dateTime('finaltime')->default(DB::raw('DATE_ADD(NOW(), INTERVAL 2 HOUR)'));
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgicalprocedures');
    }
};
