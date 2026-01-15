<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_82', function (Blueprint $table) {
            $table->id();
            $table->integer('metadata_1')->default(0);
            $table->bigInteger('address_2')->default(0);
            $table->date('description_3')->nullable();
            $table->bigInteger('config_4')->default(0);
            $table->json('reference_5')->nullable();
            $table->integer('reference_6')->default(0);
            $table->date('category_7')->nullable();
            $table->boolean('type_8')->default(false);
            $table->json('title_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_82');
    }
};
