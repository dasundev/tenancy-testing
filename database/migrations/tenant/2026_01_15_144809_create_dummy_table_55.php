<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_55', function (Blueprint $table) {
            $table->id();
            $table->integer('content_2')->default(0);
            $table->string('config_3')->nullable();
            $table->integer('settings_4')->default(0);
            $table->dateTime('type_5')->nullable();
            $table->decimal('code_7', 10, 2)->default(0.00);
            $table->date('_8')->nullable();
            $table->text('value_9')->nullable();
            $table->decimal('_10', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_55');
    }
};
