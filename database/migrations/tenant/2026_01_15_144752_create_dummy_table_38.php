<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_38', function (Blueprint $table) {
            $table->id();
            $table->integer('category_1')->default(0);
            $table->bigInteger('type_2')->default(0);
            $table->json('value_3')->nullable();
            $table->string('country_4')->nullable();
            $table->text('quantity_5')->nullable();
            $table->string('quantity_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_38');
    }
};
