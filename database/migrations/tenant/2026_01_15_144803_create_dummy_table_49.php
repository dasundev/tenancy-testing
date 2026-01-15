<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_49', function (Blueprint $table) {
            $table->id();
            $table->dateTime('notes_1')->nullable();
            $table->bigInteger('country_2')->default(0);
            $table->text('token_3')->nullable();
            $table->json('phone_4')->nullable();
            $table->integer('quantity_5')->default(0);
            $table->string('quantity_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_49');
    }
};
