<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_76', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('key_1')->default(0);
            $table->integer('code_2')->default(0);
            $table->decimal('key_3', 10, 2)->default(0.00);
            $table->decimal('token_4', 10, 2)->default(0.00);
            $table->bigInteger('category_5')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_76');
    }
};
