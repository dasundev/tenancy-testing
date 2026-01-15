<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_79', function (Blueprint $table) {
            $table->id();
            $table->integer('metadata_1')->default(0);
            $table->dateTime('config_3')->nullable();
            $table->text('notes_4')->nullable();
            $table->date('quantity_5')->nullable();
            $table->dateTime('phone_6')->nullable();
            $table->decimal('description_7', 10, 2)->default(0.00);
            $table->date('status_8')->nullable();
            $table->date('value_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_79');
    }
};
