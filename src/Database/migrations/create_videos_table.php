<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('videos', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191)->default(null);
            $table->string('slug', 191);
            $table->string('url', 191);
            $table->text('description')->default(null);
            $table->tinyInteger('published')->default(0);
            $table->timestamp('published_at')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
