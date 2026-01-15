<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_72', function (Blueprint $table) {
            $table->id();
            $table->date('city_1')->nullable();
            $table->text('quantity_2')->nullable();
            $table->date('reference_3')->nullable();
            $table->decimal('reference_4', 10, 2)->default(0.00);
            $table->text('_5')->nullable();
            $table->text('notes_6')->nullable();
            $table->json('value_7')->nullable();
            $table->string('value_8')->nullable();
            $table->decimal('code_9', 10, 2)->default(0.00);
            $table->date('slug_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_72');
    }
};
