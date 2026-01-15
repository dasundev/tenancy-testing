<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_33', function (Blueprint $table) {
            $table->id();
            $table->json('description_1')->nullable();
            $table->json('value_2')->nullable();
            $table->json('amount_3')->nullable();
            $table->bigInteger('notes_4')->default(0);
            $table->bigInteger('title_6')->default(0);
            $table->json('description_7')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_33');
    }
};
