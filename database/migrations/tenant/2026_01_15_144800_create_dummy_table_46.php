<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_46', function (Blueprint $table) {
            $table->id();
            $table->boolean('slug_1')->default(false);
            $table->string('email_2')->nullable();
            $table->boolean('metadata_3')->default(false);
            $table->date('city_4')->nullable();
            $table->json('slug_5')->nullable();
            $table->text('metadata_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_46');
    }
};
