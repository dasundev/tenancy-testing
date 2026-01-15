<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_12', function (Blueprint $table) {
            $table->id();
            $table->date('slug_1')->nullable();
            $table->string('token_2')->nullable();
            $table->integer('amount_3')->default(0);
            $table->boolean('content_4')->default(false);
            $table->integer('city_5')->default(0);
            $table->date('slug_6')->nullable();
            $table->boolean('price_7')->default(false);
            $table->date('price_8')->nullable();
            $table->json('metadata_9')->nullable();
            $table->string('country_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_12');
    }
};
