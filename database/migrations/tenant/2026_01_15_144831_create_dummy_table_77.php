<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_77', function (Blueprint $table) {
            $table->id();
            $table->json('slug_1')->nullable();
            $table->dateTime('reference_2')->nullable();
            $table->integer('content_3')->default(0);
            $table->integer('reference_5')->default(0);
            $table->decimal('code_6', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_77');
    }
};
