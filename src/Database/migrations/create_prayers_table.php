<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prayers', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('person_id');
            $table->string('title', 191)->default(null);
            $table->string('slug', 191);
            $table->text('content')->default(null);
            $table->text('description')->default(null);
            $table->string('image', 191)->nullable();
            $table->tinyInteger('published')->default(0);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('prayers');
    }
};
