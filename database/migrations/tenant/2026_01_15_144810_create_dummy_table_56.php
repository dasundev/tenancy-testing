<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_56', function (Blueprint $table) {
            $table->id();
            $table->integer('settings_1')->default(0);
            $table->boolean('email_2')->default(false);
            $table->date('content_3')->nullable();
            $table->dateTime('email_4')->nullable();
            $table->dateTime('phone_5')->nullable();
            $table->integer('metadata_6')->default(0);
            $table->bigInteger('_7')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_56');
    }
};
