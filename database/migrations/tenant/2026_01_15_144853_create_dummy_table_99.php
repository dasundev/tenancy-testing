<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_99', function (Blueprint $table) {
            $table->id();
            $table->integer('key_1')->default(0);
            $table->integer('country_2')->default(0);
            $table->text('type_3')->nullable();
            $table->decimal('type_4', 10, 2)->default(0.00);
            $table->json('value_5')->nullable();
            $table->date('content_6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_99');
    }
};
