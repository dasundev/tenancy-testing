<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_5', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reference_1')->default(0);
            $table->boolean('notes_2')->default(false);
            $table->dateTime('code_4')->nullable();
            $table->decimal('config_5', 10, 2)->default(0.00);
            $table->string('phone_6')->nullable();
            $table->text('email_7')->nullable();
            $table->date('status_8')->nullable();
            $table->json('value_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_5');
    }
};
