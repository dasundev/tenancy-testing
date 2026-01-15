<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_4', function (Blueprint $table) {
            $table->id();
            $table->integer('price_1')->default(0);
            $table->integer('config_2')->default(0);
            $table->integer('email_4')->default(0);
            $table->bigInteger('code_5')->default(0);
            $table->text('address_7')->nullable();
            $table->json('city_8')->nullable();
            $table->dateTime('key_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_4');
    }
};
