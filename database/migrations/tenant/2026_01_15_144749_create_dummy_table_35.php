<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_35', function (Blueprint $table) {
            $table->id();
            $table->text('content_1')->nullable();
            $table->bigInteger('type_2')->default(0);
            $table->string('price_3')->nullable();
            $table->text('token_4')->nullable();
            $table->integer('description_5')->default(0);
            $table->text('price_6')->nullable();
            $table->string('category_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_35');
    }
};
