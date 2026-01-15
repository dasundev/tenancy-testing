<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_86', function (Blueprint $table) {
            $table->id();
            $table->date('value_1')->nullable();
            $table->text('amount_2')->nullable();
            $table->text('_3')->nullable();
            $table->bigInteger('metadata_4')->default(0);
            $table->string('code_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_86');
    }
};
