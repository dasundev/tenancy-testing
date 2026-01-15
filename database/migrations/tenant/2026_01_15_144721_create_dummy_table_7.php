<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_7', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_1')->default(0);
            $table->decimal('config_2', 10, 2)->default(0.00);
            $table->string('_3')->nullable();
            $table->decimal('status_4', 10, 2)->default(0.00);
            $table->date('token_5')->nullable();
            $table->string('settings_6')->nullable();
            $table->bigInteger('config_7')->default(0);
            $table->string('address_8')->nullable();
            $table->dateTime('metadata_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_7');
    }
};
