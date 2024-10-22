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
        Schema::table('trains', function (Blueprint $table) {
            // Codice Treno
            $table->string('code', 16)->after('arr_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // controllo se esiste la colonna 'code' nella tabella 'trains' allora la cancello
        Schema::table('trains', function (Blueprint $table) {
            if (Schema::hasColumn('trains','code')) {
                $table->dropColumn('code');
            }
        });
    }
};
