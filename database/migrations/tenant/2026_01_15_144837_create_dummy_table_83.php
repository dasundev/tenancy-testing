<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_83', function (Blueprint $table) {
            $table->id();
            $table->date('phone_1')->nullable();
            $table->date('config_2')->nullable();
            $table->json('type_3')->nullable();
            $table->bigInteger('status_4')->default(0);
            $table->dateTime('notes_5')->nullable();
            $table->text('key_6')->nullable();
            $table->json('reference_7')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_83');
    }
};
