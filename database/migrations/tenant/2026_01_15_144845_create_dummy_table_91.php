<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_91', function (Blueprint $table) {
            $table->id();
            $table->boolean('code_1')->default(false);
            $table->text('description_2')->nullable();
            $table->boolean('status_3')->default(false);
            $table->integer('email_4')->default(0);
            $table->date('settings_5')->nullable();
            $table->integer('reference_6')->default(0);
            $table->text('type_7')->nullable();
            $table->json('name_8')->nullable();
            $table->string('value_9')->nullable();
            $table->bigInteger('metadata_10')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_91');
    }
};
