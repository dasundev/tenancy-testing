<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_45', function (Blueprint $table) {
            $table->id();
            $table->boolean('category_1')->default(false);
            $table->decimal('reference_2', 10, 2)->default(0.00);
            $table->text('token_3')->nullable();
            $table->string('metadata_4')->nullable();
            $table->string('content_5')->nullable();
            $table->json('config_6')->nullable();
            $table->json('price_7')->nullable();
            $table->boolean('description_8')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_45');
    }
};
