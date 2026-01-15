<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_87', function (Blueprint $table) {
            $table->id();
            $table->json('type_1')->nullable();
            $table->decimal('country_2', 10, 2)->default(0.00);
            $table->json('email_3')->nullable();
            $table->string('price_4')->nullable();
            $table->integer('metadata_5')->default(0);
            $table->dateTime('value_6')->nullable();
            $table->text('_7')->nullable();
            $table->json('phone_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_87');
    }
};
