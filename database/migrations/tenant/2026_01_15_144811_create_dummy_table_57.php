<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_57', function (Blueprint $table) {
            $table->id();
            $table->date('status_1')->nullable();
            $table->string('name_2')->nullable();
            $table->integer('status_3')->default(0);
            $table->integer('type_4')->default(0);
            $table->decimal('quantity_5', 10, 2)->default(0.00);
            $table->boolean('address_6')->default(false);
            $table->bigInteger('token_7')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_57');
    }
};
