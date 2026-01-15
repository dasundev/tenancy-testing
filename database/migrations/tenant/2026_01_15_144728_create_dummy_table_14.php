<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_14', function (Blueprint $table) {
            $table->id();
            $table->json('key_1')->nullable();
            $table->date('quantity_2')->nullable();
            $table->date('status_3')->nullable();
            $table->boolean('email_4')->default(false);
            $table->boolean('category_6')->default(false);
            $table->decimal('price_8', 10, 2)->default(0.00);
            $table->text('content_9')->nullable();
            $table->dateTime('address_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_14');
    }
};
