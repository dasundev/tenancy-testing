<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_81', function (Blueprint $table) {
            $table->id();
            $table->text('status_1')->nullable();
            $table->dateTime('description_2')->nullable();
            $table->text('code_3')->nullable();
            $table->integer('content_4')->default(0);
            $table->date('slug_5')->nullable();
            $table->integer('notes_6')->default(0);
            $table->decimal('price_7', 10, 2)->default(0.00);
            $table->text('token_8')->nullable();
            $table->integer('type_9')->default(0);
            $table->dateTime('notes_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_81');
    }
};
