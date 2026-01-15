<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_17', function (Blueprint $table) {
            $table->id();
            $table->text('price_1')->nullable();
            $table->dateTime('country_2')->nullable();
            $table->json('amount_3')->nullable();
            $table->bigInteger('_4')->default(0);
            $table->json('country_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_17');
    }
};
