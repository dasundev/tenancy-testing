<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_63', function (Blueprint $table) {
            $table->id();
            $table->string('address_1')->nullable();
            $table->date('token_2')->nullable();
            $table->decimal('city_3', 10, 2)->default(0.00);
            $table->boolean('address_4')->default(false);
            $table->text('title_6')->nullable();
            $table->bigInteger('content_7')->default(0);
            $table->decimal('address_8', 10, 2)->default(0.00);
            $table->boolean('address_9')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_63');
    }
};
