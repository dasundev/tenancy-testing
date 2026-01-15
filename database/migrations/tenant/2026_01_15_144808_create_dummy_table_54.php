<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_54', function (Blueprint $table) {
            $table->id();
            $table->json('reference_1')->nullable();
            $table->decimal('code_2', 10, 2)->default(0.00);
            $table->string('config_3')->nullable();
            $table->boolean('amount_4')->default(false);
            $table->dateTime('type_5')->nullable();
            $table->integer('amount_6')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_54');
    }
};
