<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_88', function (Blueprint $table) {
            $table->id();
            $table->dateTime('settings_1')->nullable();
            $table->text('content_2')->nullable();
            $table->string('description_3')->nullable();
            $table->decimal('name_4', 10, 2)->default(0.00);
            $table->json('value_5')->nullable();
            $table->boolean('status_6')->default(false);
            $table->json('value_7')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_88');
    }
};
