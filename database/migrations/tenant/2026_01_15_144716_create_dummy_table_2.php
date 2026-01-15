<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_2', function (Blueprint $table) {
            $table->id();
            $table->json('settings_1')->nullable();
            $table->dateTime('quantity_2')->nullable();
            $table->dateTime('_3')->nullable();
            $table->bigInteger('code_4')->default(0);
            $table->json('reference_5')->nullable();
            $table->decimal('token_6', 10, 2)->default(0.00);
            $table->text('price_7')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_2');
    }
};
