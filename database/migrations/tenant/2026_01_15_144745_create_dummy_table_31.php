<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_31', function (Blueprint $table) {
            $table->id();
            $table->dateTime('country_1')->nullable();
            $table->integer('slug_2')->default(0);
            $table->integer('name_3')->default(0);
            $table->date('content_6')->nullable();
            $table->json('token_7')->nullable();
            $table->json('metadata_8')->nullable();
            $table->dateTime('slug_9')->nullable();
            $table->bigInteger('reference_10')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_31');
    }
};
