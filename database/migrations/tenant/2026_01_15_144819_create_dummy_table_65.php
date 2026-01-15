<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_65', function (Blueprint $table) {
            $table->id();
            $table->json('title_1')->nullable();
            $table->bigInteger('quantity_3')->default(0);
            $table->decimal('amount_4', 10, 2)->default(0.00);
            $table->string('token_5')->nullable();
            $table->text('metadata_6')->nullable();
            $table->date('slug_7')->nullable();
            $table->decimal('title_8', 10, 2)->default(0.00);
            $table->json('content_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_65');
    }
};
