<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_85', function (Blueprint $table) {
            $table->id();
            $table->string('description_1')->nullable();
            $table->boolean('slug_2')->default(false);
            $table->bigInteger('category_3')->default(0);
            $table->date('token_4')->nullable();
            $table->dateTime('amount_5')->nullable();
            $table->dateTime('type_6')->nullable();
            $table->dateTime('title_7')->nullable();
            $table->dateTime('status_9')->nullable();
            $table->text('reference_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_85');
    }
};
