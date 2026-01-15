<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_50', function (Blueprint $table) {
            $table->id();
            $table->dateTime('value_1')->nullable();
            $table->decimal('description_2', 10, 2)->default(0.00);
            $table->bigInteger('title_3')->default(0);
            $table->text('reference_5')->nullable();
            $table->bigInteger('key_6')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_50');
    }
};
