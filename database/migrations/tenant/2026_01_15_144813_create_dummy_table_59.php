<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_59', function (Blueprint $table) {
            $table->id();
            $table->date('key_1')->nullable();
            $table->dateTime('value_2')->nullable();
            $table->decimal('_3', 10, 2)->default(0.00);
            $table->integer('config_5')->default(0);
            $table->string('description_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_59');
    }
};
