<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_48', function (Blueprint $table) {
            $table->id();
            $table->text('country_1')->nullable();
            $table->date('notes_2')->nullable();
            $table->integer('type_3')->default(0);
            $table->dateTime('price_4')->nullable();
            $table->decimal('country_5', 10, 2)->default(0.00);
            $table->text('address_6')->nullable();
            $table->bigInteger('notes_7')->default(0);
            $table->boolean('city_8')->default(false);
            $table->bigInteger('code_9')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_48');
    }
};
