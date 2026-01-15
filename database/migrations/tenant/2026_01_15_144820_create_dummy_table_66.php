<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_66', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('slug_1')->default(0);
            $table->boolean('status_2')->default(false);
            $table->boolean('title_3')->default(false);
            $table->string('amount_4')->nullable();
            $table->json('city_5')->nullable();
            $table->json('content_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_66');
    }
};
