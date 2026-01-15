<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_32', function (Blueprint $table) {
            $table->id();
            $table->integer('status_1')->default(0);
            $table->string('content_3')->nullable();
            $table->string('content_4')->nullable();
            $table->dateTime('token_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_32');
    }
};
