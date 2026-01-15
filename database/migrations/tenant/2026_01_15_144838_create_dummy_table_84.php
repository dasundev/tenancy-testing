<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_84', function (Blueprint $table) {
            $table->id();
            $table->date('slug_1')->nullable();
            $table->bigInteger('address_2')->default(0);
            $table->boolean('value_4')->default(false);
            $table->text('token_5')->nullable();
            $table->boolean('key_6')->default(false);
            $table->integer('token_7')->default(0);
            $table->date('notes_8')->nullable();
            $table->bigInteger('amount_9')->default(0);
            $table->integer('settings_10')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_84');
    }
};
