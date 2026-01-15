<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_47', function (Blueprint $table) {
            $table->id();
            $table->date('address_3')->nullable();
            $table->decimal('phone_4', 10, 2)->default(0.00);
            $table->json('description_5')->nullable();
            $table->integer('settings_6')->default(0);
            $table->date('content_7')->nullable();
            $table->boolean('title_8')->default(false);
            $table->text('address_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_47');
    }
};
