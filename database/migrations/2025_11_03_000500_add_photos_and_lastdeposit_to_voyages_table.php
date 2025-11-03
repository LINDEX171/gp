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
        $table->string('profile_photo')->nullable()->after('status');
        $table->string('id_card_photo')->nullable()->after('profile_photo');
        $table->date('last_deposit_day')->nullable()->after('id_card_photo');
    });
}

public function down(): void
{
    Schema::table('voyages', function (Blueprint $table) {
        $table->dropColumn(['profile_photo', 'id_card_photo', 'last_deposit_day']);
    });
}

};
