<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_44', function (Blueprint $table) {
            $table->id();
            $table->integer('config_1')->default(0);
            $table->boolean('config_2')->default(false);
            $table->integer('key_3')->default(0);
            $table->text('value_4')->nullable();
            $table->decimal('email_5', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_44');
    }
};
