<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_15', function (Blueprint $table) {
            $table->id();
            $table->json('slug_1')->nullable();
            $table->decimal('title_2', 10, 2)->default(0.00);
            $table->integer('reference_3')->default(0);
            $table->decimal('amount_4', 10, 2)->default(0.00);
            $table->date('country_5')->nullable();
            $table->bigInteger('settings_6')->default(0);
            $table->bigInteger('settings_7')->default(0);
            $table->bigInteger('config_8')->default(0);
            $table->bigInteger('slug_9')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_15');
    }
};
