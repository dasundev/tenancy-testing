<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_36', function (Blueprint $table) {
            $table->id();
            $table->text('country_1')->nullable();
            $table->json('slug_2')->nullable();
            $table->dateTime('country_3')->nullable();
            $table->decimal('reference_4', 10, 2)->default(0.00);
            $table->boolean('status_5')->default(false);
            $table->dateTime('metadata_6')->nullable();
            $table->json('type_7')->nullable();
            $table->bigInteger('amount_8')->default(0);
            $table->dateTime('type_9')->nullable();
            $table->decimal('type_10', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_36');
    }
};
