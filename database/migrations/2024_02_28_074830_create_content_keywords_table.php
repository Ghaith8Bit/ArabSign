<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('content_keywords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->string('keyword');
            $table->timestamps();

            $table->unique(['content_id', 'keyword']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('content_keywords');
    }
};
