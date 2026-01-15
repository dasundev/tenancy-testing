<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_78', function (Blueprint $table) {
            $table->id();
            $table->decimal('config_1', 10, 2)->default(0.00);
            $table->boolean('phone_2')->default(false);
            $table->string('content_3')->nullable();
            $table->date('price_4')->nullable();
            $table->string('title_5')->nullable();
            $table->decimal('email_6', 10, 2)->default(0.00);
            $table->bigInteger('quantity_7')->default(0);
            $table->decimal('name_8', 10, 2)->default(0.00);
            $table->dateTime('email_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_78');
    }
};
