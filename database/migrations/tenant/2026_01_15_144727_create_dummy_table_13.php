<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_13', function (Blueprint $table) {
            $table->id();
            $table->string('quantity_1')->nullable();
            $table->json('code_2')->nullable();
            $table->integer('country_3')->default(0);
            $table->integer('config_4')->default(0);
            $table->text('reference_5')->nullable();
            $table->integer('title_6')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_13');
    }
};
