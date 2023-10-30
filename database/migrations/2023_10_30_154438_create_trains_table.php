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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 150);
            $table->string('stazione_di_arrivo', 150);
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_treno', 12);
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
