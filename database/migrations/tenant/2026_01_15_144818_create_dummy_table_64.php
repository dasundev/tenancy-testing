<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_64', function (Blueprint $table) {
            $table->id();
            $table->text('type_1')->nullable();
            $table->json('amount_2')->nullable();
            $table->bigInteger('notes_3')->default(0);
            $table->string('status_4')->nullable();
            $table->text('price_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_64');
    }
};
