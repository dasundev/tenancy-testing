<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_58', function (Blueprint $table) {
            $table->id();
            $table->decimal('slug_1', 10, 2)->default(0.00);
            $table->boolean('slug_2')->default(false);
            $table->string('status_3')->nullable();
            $table->dateTime('address_4')->nullable();
            $table->decimal('title_5', 10, 2)->default(0.00);
            $table->string('status_7')->nullable();
            $table->boolean('token_8')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_58');
    }
};
