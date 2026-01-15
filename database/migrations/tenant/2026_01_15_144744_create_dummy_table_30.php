<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_30', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('slug_1')->default(0);
            $table->date('reference_2')->nullable();
            $table->bigInteger('phone_3')->default(0);
            $table->decimal('_4', 10, 2)->default(0.00);
            $table->integer('token_5')->default(0);
            $table->bigInteger('quantity_6')->default(0);
            $table->string('type_7')->nullable();
            $table->json('email_8')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_30');
    }
};
