<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_34', function (Blueprint $table) {
            $table->id();
            $table->text('config_1')->nullable();
            $table->string('content_2')->nullable();
            $table->dateTime('description_3')->nullable();
            $table->dateTime('notes_4')->nullable();
            $table->dateTime('category_5')->nullable();
            $table->boolean('settings_6')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_34');
    }
};
