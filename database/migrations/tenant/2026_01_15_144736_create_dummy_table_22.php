<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_22', function (Blueprint $table) {
            $table->id();
            $table->json('price_1')->nullable();
            $table->decimal('address_3', 10, 2)->default(0.00);
            $table->decimal('category_4', 10, 2)->default(0.00);
            $table->integer('reference_5')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_22');
    }
};
