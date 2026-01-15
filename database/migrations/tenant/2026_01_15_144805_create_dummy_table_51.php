<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_51', function (Blueprint $table) {
            $table->id();
            $table->dateTime('type_1')->nullable();
            $table->integer('_2')->default(0);
            $table->decimal('description_3', 10, 2)->default(0.00);
            $table->boolean('email_4')->default(false);
            $table->decimal('type_5', 10, 2)->default(0.00);
            $table->json('address_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_51');
    }
};
