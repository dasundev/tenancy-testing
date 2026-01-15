<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_93', function (Blueprint $table) {
            $table->id();
            $table->string('country_1')->nullable();
            $table->text('_2')->nullable();
            $table->bigInteger('settings_3')->default(0);
            $table->text('slug_4')->nullable();
            $table->date('metadata_5')->nullable();
            $table->bigInteger('quantity_7')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_93');
    }
};
