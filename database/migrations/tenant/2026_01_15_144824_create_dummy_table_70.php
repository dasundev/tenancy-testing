<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_70', function (Blueprint $table) {
            $table->id();
            $table->integer('metadata_1')->default(0);
            $table->integer('description_2')->default(0);
            $table->date('token_3')->nullable();
            $table->bigInteger('value_4')->default(0);
            $table->dateTime('content_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_70');
    }
};
