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
    Schema::create('voyages', function (Blueprint $table) {
        $table->id();
        $table->string('fullname');
        $table->string('phone');
        $table->string('whatsapp');
        $table->string('email');
        $table->string('departure');
        $table->string('departure1');
        $table->string('arrival');
        $table->string('arrival1');
        $table->date('departure_date');
        $table->date('arrival_date');
        $table->integer('weight');
        $table->decimal('price', 8, 2);
        $table->text('comment')->nullable();
        $table->enum('status', ['pending', 'validated', 'rejected'])->default('pending');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
