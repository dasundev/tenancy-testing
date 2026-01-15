<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_37', function (Blueprint $table) {
            $table->id();
            $table->text('name_1')->nullable();
            $table->bigInteger('config_2')->default(0);
            $table->bigInteger('config_3')->default(0);
            $table->integer('name_4')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_37');
    }
};
