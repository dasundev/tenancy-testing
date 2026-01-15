<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_21', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('title_1')->default(0);
            $table->dateTime('category_2')->nullable();
            $table->dateTime('config_3')->nullable();
            $table->decimal('category_4', 10, 2)->default(0.00);
            $table->string('value_5')->nullable();
            $table->text('content_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_21');
    }
};
