<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_19', function (Blueprint $table) {
            $table->id();
            $table->decimal('value_1', 10, 2)->default(0.00);
            $table->dateTime('notes_2')->nullable();
            $table->dateTime('price_3')->nullable();
            $table->string('token_4')->nullable();
            $table->integer('city_5')->default(0);
            $table->text('key_6')->nullable();
            $table->bigInteger('quantity_7')->default(0);
            $table->decimal('key_8', 10, 2)->default(0.00);
            $table->integer('name_9')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_19');
    }
};
