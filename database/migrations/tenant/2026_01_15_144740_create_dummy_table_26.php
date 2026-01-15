<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_26', function (Blueprint $table) {
            $table->id();
            $table->date('content_1')->nullable();
            $table->integer('price_2')->default(0);
            $table->date('settings_3')->nullable();
            $table->integer('type_4')->default(0);
            $table->date('address_5')->nullable();
            $table->dateTime('title_6')->nullable();
            $table->decimal('key_7', 10, 2)->default(0.00);
            $table->text('phone_8')->nullable();
            $table->decimal('token_9', 10, 2)->default(0.00);
            $table->date('title_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_26');
    }
};
