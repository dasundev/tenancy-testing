<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_60', function (Blueprint $table) {
            $table->id();
            $table->decimal('metadata_1', 10, 2)->default(0.00);
            $table->text('type_3')->nullable();
            $table->decimal('metadata_4', 10, 2)->default(0.00);
            $table->string('phone_5')->nullable();
            $table->dateTime('title_6')->nullable();
            $table->boolean('city_7')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_60');
    }
};
