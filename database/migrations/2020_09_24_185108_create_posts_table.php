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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('author_id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('thumbnail')->default('/posts/default.svg');
            $table->timestamps();

            $table->foreign('category_id')
                ->on('categories')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('author_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade');
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
