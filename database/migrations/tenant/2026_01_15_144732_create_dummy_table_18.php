<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_18', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount_1')->default(0);
            $table->date('email_2')->nullable();
            $table->text('address_3')->nullable();
            $table->text('status_4')->nullable();
            $table->string('country_5')->nullable();
            $table->date('notes_6')->nullable();
            $table->dateTime('value_7')->nullable();
            $table->string('phone_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_18');
    }
};
