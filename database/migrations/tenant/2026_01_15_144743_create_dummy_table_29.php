<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_29', function (Blueprint $table) {
            $table->id();
            $table->json('slug_1')->nullable();
            $table->dateTime('key_2')->nullable();
            $table->string('status_3')->nullable();
            $table->bigInteger('amount_4')->default(0);
            $table->json('price_6')->nullable();
            $table->date('config_8')->nullable();
            $table->bigInteger('key_9')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_29');
    }
};
