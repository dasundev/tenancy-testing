<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_68', function (Blueprint $table) {
            $table->id();
            $table->string('reference_1')->nullable();
            $table->bigInteger('_2')->default(0);
            $table->text('city_3')->nullable();
            $table->date('quantity_4')->nullable();
            $table->boolean('name_5')->default(false);
            $table->json('reference_7')->nullable();
            $table->text('description_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_68');
    }
};
