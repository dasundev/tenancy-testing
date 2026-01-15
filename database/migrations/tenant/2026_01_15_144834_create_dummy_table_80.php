<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_80', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('phone_2')->default(0);
            $table->integer('status_3')->default(0);
            $table->date('status_4')->nullable();
            $table->dateTime('description_6')->nullable();
            $table->decimal('token_7', 10, 2)->default(0.00);
            $table->integer('category_8')->default(0);
            $table->string('title_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_80');
    }
};
