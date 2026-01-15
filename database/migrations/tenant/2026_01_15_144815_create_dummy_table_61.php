<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_61', function (Blueprint $table) {
            $table->id();
            $table->json('name_1')->nullable();
            $table->json('address_2')->nullable();
            $table->dateTime('code_3')->nullable();
            $table->boolean('code_4')->default(false);
            $table->decimal('slug_5', 10, 2)->default(0.00);
            $table->string('phone_6')->nullable();
            $table->string('settings_7')->nullable();
            $table->text('city_8')->nullable();
            $table->date('description_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_61');
    }
};
