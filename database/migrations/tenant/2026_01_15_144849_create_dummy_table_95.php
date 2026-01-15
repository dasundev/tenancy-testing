<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_95', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('settings_1')->default(0);
            $table->text('slug_2')->nullable();
            $table->text('content_3')->nullable();
            $table->json('status_4')->nullable();
            $table->json('price_5')->nullable();
            $table->date('settings_6')->nullable();
            $table->integer('city_7')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_95');
    }
};
