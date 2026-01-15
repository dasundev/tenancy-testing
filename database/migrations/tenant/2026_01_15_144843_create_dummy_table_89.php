<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_89', function (Blueprint $table) {
            $table->id();
            $table->string('amount_1')->nullable();
            $table->boolean('email_2')->default(false);
            $table->text('metadata_4')->nullable();
            $table->boolean('reference_5')->default(false);
            $table->text('status_6')->nullable();
            $table->date('key_7')->nullable();
            $table->dateTime('notes_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_89');
    }
};
