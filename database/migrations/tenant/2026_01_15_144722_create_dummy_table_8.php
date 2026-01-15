<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_8', function (Blueprint $table) {
            $table->id();
            $table->date('price_1')->nullable();
            $table->boolean('status_2')->default(false);
            $table->decimal('key_3', 10, 2)->default(0.00);
            $table->decimal('type_4', 10, 2)->default(0.00);
            $table->boolean('value_5')->default(false);
            $table->decimal('reference_6', 10, 2)->default(0.00);
            $table->integer('category_7')->default(0);
            $table->integer('status_8')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_8');
    }
};
