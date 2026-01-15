<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_40', function (Blueprint $table) {
            $table->id();
            $table->date('notes_1')->nullable();
            $table->dateTime('slug_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->json('slug_4')->nullable();
            $table->string('title_5')->nullable();
            $table->integer('type_6')->default(0);
            $table->decimal('reference_7', 10, 2)->default(0.00);
            $table->json('name_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_40');
    }
};
