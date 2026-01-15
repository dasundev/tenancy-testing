<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_24', function (Blueprint $table) {
            $table->id();
            $table->string('reference_1')->nullable();
            $table->json('reference_2')->nullable();
            $table->decimal('token_3', 10, 2)->default(0.00);
            $table->dateTime('_4')->nullable();
            $table->dateTime('reference_5')->nullable();
            $table->integer('description_6')->default(0);
            $table->decimal('category_7', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_24');
    }
};
