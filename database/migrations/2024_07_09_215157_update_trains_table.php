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
        // agginugo dati per tabella trains 
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_di_partenza');
            $table->dropColumn('stazione_di_arrivo');
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('orario_di_arrivo');
            $table->dropColumn('codice_treno');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
};
