<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_25', function (Blueprint $table) {
            $table->id();
            $table->date('email_1')->nullable();
            $table->decimal('notes_2', 10, 2)->default(0.00);
            $table->text('value_3')->nullable();
            $table->integer('content_4')->default(0);
            $table->boolean('_5')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_25');
    }
};
