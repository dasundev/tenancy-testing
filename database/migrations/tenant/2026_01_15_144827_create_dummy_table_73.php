<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_73', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount_1')->default(0);
            $table->boolean('address_2')->default(false);
            $table->dateTime('city_3')->nullable();
            $table->json('quantity_4')->nullable();
            $table->json('email_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_73');
    }
};
