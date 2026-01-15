<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_67', function (Blueprint $table) {
            $table->id();
            $table->boolean('config_1')->default(false);
            $table->bigInteger('price_2')->default(0);
            $table->string('type_3')->nullable();
            $table->date('metadata_4')->nullable();
            $table->integer('description_5')->default(0);
            $table->integer('address_6')->default(0);
            $table->date('status_7')->nullable();
            $table->string('phone_8')->nullable();
            $table->boolean('quantity_9')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_67');
    }
};
