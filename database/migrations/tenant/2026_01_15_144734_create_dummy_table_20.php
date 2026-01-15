<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_20', function (Blueprint $table) {
            $table->id();
            $table->string('category_1')->nullable();
            $table->json('phone_2')->nullable();
            $table->decimal('country_3', 10, 2)->default(0.00);
            $table->json('type_4')->nullable();
            $table->string('notes_5')->nullable();
            $table->bigInteger('status_6')->default(0);
            $table->dateTime('country_7')->nullable();
            $table->dateTime('metadata_8')->nullable();
            $table->text('email_9')->nullable();
            $table->json('email_10')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_20');
    }
};
