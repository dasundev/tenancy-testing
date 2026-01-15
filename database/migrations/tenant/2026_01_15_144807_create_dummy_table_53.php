<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_53', function (Blueprint $table) {
            $table->id();
            $table->boolean('reference_1')->default(false);
            $table->integer('amount_2')->default(0);
            $table->dateTime('type_3')->nullable();
            $table->json('content_4')->nullable();
            $table->string('token_5')->nullable();
            $table->boolean('notes_6')->default(false);
            $table->bigInteger('quantity_7')->default(0);
            $table->integer('city_8')->default(0);
            $table->bigInteger('value_9')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_53');
    }
};
