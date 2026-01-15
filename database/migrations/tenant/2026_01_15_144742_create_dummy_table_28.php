<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_28', function (Blueprint $table) {
            $table->id();
            $table->decimal('price_3', 10, 2)->default(0.00);
            $table->boolean('amount_5')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_28');
    }
};
