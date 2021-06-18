<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->string('title');
            $table->string('dateDay');
            $table->string('dateMonth');
            $table->string('dateYear');
            $table->string('img');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('validate');
            $table->boolean('bin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
