<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_27', function (Blueprint $table) {
            $table->id();
            $table->date('category_2')->nullable();
            $table->date('metadata_3')->nullable();
            $table->integer('status_6')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_27');
    }
};
