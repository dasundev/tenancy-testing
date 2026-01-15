<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_43', function (Blueprint $table) {
            $table->id();
            $table->boolean('country_3')->default(false);
            $table->string('_4')->nullable();
            $table->decimal('key_5', 10, 2)->default(0.00);
            $table->dateTime('email_6')->nullable();
            $table->dateTime('key_7')->nullable();
            $table->integer('price_8')->default(0);
            $table->date('amount_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_43');
    }
};
