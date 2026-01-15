<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_62', function (Blueprint $table) {
            $table->id();
            $table->integer('reference_1')->default(0);
            $table->integer('settings_3')->default(0);
            $table->date('type_4')->nullable();
            $table->dateTime('_5')->nullable();
            $table->dateTime('value_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_62');
    }
};
