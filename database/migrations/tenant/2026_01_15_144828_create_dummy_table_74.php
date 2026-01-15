<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_74', function (Blueprint $table) {
            $table->id();
            $table->boolean('reference_1')->default(false);
            $table->dateTime('address_2')->nullable();
            $table->boolean('phone_3')->default(false);
            $table->integer('type_4')->default(0);
            $table->date('value_5')->nullable();
            $table->date('type_6')->nullable();
            $table->json('price_7')->nullable();
            $table->string('price_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_74');
    }
};
