<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_42', function (Blueprint $table) {
            $table->id();
            $table->integer('phone_1')->default(0);
            $table->boolean('price_2')->default(false);
            $table->text('content_4')->nullable();
            $table->decimal('country_5', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_42');
    }
};
