<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_41', function (Blueprint $table) {
            $table->id();
            $table->json('key_1')->nullable();
            $table->dateTime('city_2')->nullable();
            $table->json('title_3')->nullable();
            $table->dateTime('city_4')->nullable();
            $table->string('amount_5')->nullable();
            $table->date('value_6')->nullable();
            $table->json('status_7')->nullable();
            $table->string('metadata_8')->nullable();
            $table->string('code_9')->nullable();
            $table->text('email_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_41');
    }
};
