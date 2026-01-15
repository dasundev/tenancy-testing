<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_96', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount_1')->default(0);
            $table->text('content_2')->nullable();
            $table->bigInteger('settings_3')->default(0);
            $table->boolean('name_4')->default(false);
            $table->decimal('description_5', 10, 2)->default(0.00);
            $table->text('token_6')->nullable();
            $table->dateTime('metadata_7')->nullable();
            $table->string('settings_8')->nullable();
            $table->string('country_9')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_96');
    }
};
