<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name_ja', 100)->nullable()->comment('国名（日本語）');
            $table->string('name_en', 100)->nullable()->comment('国名（英語）');
            $table->char('country_code', 2)->unique()->nullable()->comment('国コード');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
