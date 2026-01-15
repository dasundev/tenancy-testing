<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_39', function (Blueprint $table) {
            $table->id();
            $table->string('type_1')->nullable();
            $table->date('status_2')->nullable();
            $table->boolean('metadata_3')->default(false);
            $table->text('config_4')->nullable();
            $table->text('amount_5')->nullable();
            $table->date('key_6')->nullable();
            $table->decimal('metadata_7', 10, 2)->default(0.00);
            $table->bigInteger('slug_8')->default(0);
            $table->decimal('metadata_9', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_39');
    }
};
