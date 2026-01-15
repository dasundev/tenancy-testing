<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_71', function (Blueprint $table) {
            $table->id();
            $table->boolean('phone_2')->default(false);
            $table->decimal('code_3', 10, 2)->default(0.00);
            $table->decimal('reference_4', 10, 2)->default(0.00);
            $table->integer('price_5')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_71');
    }
};
