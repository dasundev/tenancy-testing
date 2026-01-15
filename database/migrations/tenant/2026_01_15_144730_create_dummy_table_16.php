<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_16', function (Blueprint $table) {
            $table->id();
            $table->decimal('slug_1', 10, 2)->default(0.00);
            $table->string('country_2')->nullable();
            $table->json('slug_3')->nullable();
            $table->decimal('settings_5', 10, 2)->default(0.00);
            $table->date('notes_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_16');
    }
};
