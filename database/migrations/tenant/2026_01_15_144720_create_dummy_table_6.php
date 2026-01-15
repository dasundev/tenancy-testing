<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_6', function (Blueprint $table) {
            $table->id();
            $table->text('name_1')->nullable();
            $table->string('_2')->nullable();
            $table->date('key_4')->nullable();
            $table->integer('settings_5')->default(0);
            $table->string('_6')->nullable();
            $table->text('phone_7')->nullable();
            $table->date('content_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_6');
    }
};
