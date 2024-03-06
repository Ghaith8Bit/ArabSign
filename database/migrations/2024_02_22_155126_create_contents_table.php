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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->longText('body')->nullable();
            $table->foreignId('resource_id')->references('id')->on('resources')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('thumbnail');
            $table->integer('views')->default(0);
            $table->dateTime('published_at')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('contents');
    }
};
