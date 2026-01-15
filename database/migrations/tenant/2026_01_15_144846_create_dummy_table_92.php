<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_92', function (Blueprint $table) {
            $table->id();
            $table->json('reference_1')->nullable();
            $table->boolean('_2')->default(false);
            $table->bigInteger('code_3')->default(0);
            $table->string('slug_4')->nullable();
            $table->date('name_5')->nullable();
            $table->dateTime('name_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_92');
    }
};
