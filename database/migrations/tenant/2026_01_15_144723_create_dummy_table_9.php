<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_9', function (Blueprint $table) {
            $table->id();
            $table->date('slug_2')->nullable();
            $table->bigInteger('quantity_3')->default(0);
            $table->boolean('notes_4')->default(false);
            $table->integer('phone_5')->default(0);
            $table->boolean('price_6')->default(false);
            $table->json('config_7')->nullable();
            $table->dateTime('country_8')->nullable();
            $table->integer('metadata_9')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_9');
    }
};
