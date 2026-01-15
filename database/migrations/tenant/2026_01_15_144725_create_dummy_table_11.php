<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_11', function (Blueprint $table) {
            $table->id();
            $table->dateTime('description_1')->nullable();
            $table->json('metadata_3')->nullable();
            $table->json('quantity_4')->nullable();
            $table->date('city_5')->nullable();
            $table->boolean('email_6')->default(false);
            $table->dateTime('title_7')->nullable();
            $table->string('_8')->nullable();
            $table->boolean('value_10')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_11');
    }
};
