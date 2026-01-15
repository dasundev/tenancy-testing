<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_97', function (Blueprint $table) {
            $table->id();
            $table->dateTime('content_1')->nullable();
            $table->dateTime('notes_2')->nullable();
            $table->text('token_3')->nullable();
            $table->text('email_4')->nullable();
            $table->decimal('value_5', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_97');
    }
};
