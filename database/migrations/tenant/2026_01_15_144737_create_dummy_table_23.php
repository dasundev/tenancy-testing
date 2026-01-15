<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_23', function (Blueprint $table) {
            $table->id();
            $table->date('config_2')->nullable();
            $table->dateTime('status_3')->nullable();
            $table->date('phone_4')->nullable();
            $table->date('settings_5')->nullable();
            $table->text('email_7')->nullable();
            $table->string('reference_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_23');
    }
};
