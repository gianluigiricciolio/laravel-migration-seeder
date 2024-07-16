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
        // aggiungo date partenza e arrivo treni
        Schema::table('trains', function (Blueprint $table) {
            $table->date('data_di_partenza')->nullable();
            $table->date('data_di_arrivo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('data_di_partenza');
            $table->dropColumn('data_di_arrivo');
        });
    }
};
