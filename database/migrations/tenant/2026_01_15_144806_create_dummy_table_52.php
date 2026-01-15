<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_52', function (Blueprint $table) {
            $table->id();
            $table->boolean('amount_1')->default(false);
            $table->string('slug_2')->nullable();
            $table->json('email_3')->nullable();
            $table->decimal('category_4', 10, 2)->default(0.00);
            $table->decimal('title_5', 10, 2)->default(0.00);
            $table->bigInteger('content_6')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_52');
    }
};
