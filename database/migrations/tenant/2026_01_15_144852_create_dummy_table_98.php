<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_98', function (Blueprint $table) {
            $table->id();
            $table->json('address_1')->nullable();
            $table->text('slug_2')->nullable();
            $table->dateTime('email_3')->nullable();
            $table->date('quantity_4')->nullable();
            $table->json('description_5')->nullable();
            $table->integer('key_6')->default(0);
            $table->string('address_7')->nullable();
            $table->bigInteger('title_8')->default(0);
            $table->json('price_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_98');
    }
};
