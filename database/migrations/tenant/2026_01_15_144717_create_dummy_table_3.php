<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_3', function (Blueprint $table) {
            $table->id();
            $table->text('quantity_1')->nullable();
            $table->date('content_2')->nullable();
            $table->dateTime('slug_3')->nullable();
            $table->integer('description_4')->default(0);
            $table->text('quantity_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_3');
    }
};
