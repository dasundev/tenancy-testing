<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_75', function (Blueprint $table) {
            $table->id();
            $table->dateTime('quantity_1')->nullable();
            $table->dateTime('amount_2')->nullable();
            $table->integer('type_3')->default(0);
            $table->string('config_4')->nullable();
            $table->text('quantity_5')->nullable();
            $table->text('address_6')->nullable();
            $table->bigInteger('notes_8')->default(0);
            $table->string('amount_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_75');
    }
};
