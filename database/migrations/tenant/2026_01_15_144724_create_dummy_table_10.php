<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_10', function (Blueprint $table) {
            $table->id();
            $table->date('settings_1')->nullable();
            $table->date('notes_2')->nullable();
            $table->integer('value_3')->default(0);
            $table->string('title_4')->nullable();
            $table->date('description_5')->nullable();
            $table->decimal('status_6', 10, 2)->default(0.00);
            $table->boolean('type_7')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_10');
    }
};
