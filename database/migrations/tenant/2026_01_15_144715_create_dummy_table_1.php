<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_table_1', function (Blueprint $table) {
            $table->id();
            $table->text('email_1')->nullable();
            $table->integer('country_2')->default(0);
            $table->decimal('status_3', 10, 2)->default(0.00);
            $table->date('content_4')->nullable();
            $table->json('country_5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_table_1');
    }
};
