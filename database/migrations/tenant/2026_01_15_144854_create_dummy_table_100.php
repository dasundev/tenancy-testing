<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_100', function (Blueprint $table) {
            $table->id();
            $table->decimal('content_1', 10, 2)->default(0.00);
            $table->bigInteger('type_3')->default(0);
            $table->json('slug_4')->nullable();
            $table->bigInteger('metadata_5')->default(0);
            $table->dateTime('config_6')->nullable();
            $table->json('slug_7')->nullable();
            $table->string('country_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_100');
    }
};
