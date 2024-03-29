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
        Schema::create('jawaban_soals', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('soals_id')->constrained('soals','id')->cascadeOnUpdate()->restrictOnDelete();
            $table->text('text_jawaban');
            $table->boolean('jawaban_benar')->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_soals');
    }
};
