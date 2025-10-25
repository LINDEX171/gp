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
    Schema::table('voyages', function (Blueprint $table) {
        $table->string('departure_photo')->nullable()->after('departure');
        $table->string('arrival_photo')->nullable()->after('arrival');
    });
}

public function down(): void
{
    Schema::table('voyages', function (Blueprint $table) {
        $table->dropColumn(['departure_photo', 'arrival_photo']);
    });
}

};
