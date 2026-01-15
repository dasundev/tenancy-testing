<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_94', function (Blueprint $table) {
            $table->id();
            $table->text('config_1')->nullable();
            $table->json('config_2')->nullable();
            $table->text('token_3')->nullable();
            $table->boolean('description_5')->default(false);
            $table->integer('status_6')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_94');
    }
};
