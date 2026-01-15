<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_69', function (Blueprint $table) {
            $table->id();
            $table->integer('settings_1')->default(0);
            $table->string('quantity_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->text('address_4')->nullable();
            $table->json('value_5')->nullable();
            $table->dateTime('price_6')->nullable();
            $table->date('value_7')->nullable();
            $table->string('code_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_69');
    }
};
