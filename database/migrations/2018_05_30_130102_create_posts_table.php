<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'posts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug')->unique(); //to reach post by slug istead of $idea
                $table->integer('author_id'); //for displaying author near post
                $table->string('title'); //title
                $table->text('excerpt'); //summary of content
                $table->longText('content'); // full content
                $table->enum('status', ['published', 'draft', 'deleted']); // post statuses in admin
                $table->boolean('featured');
                $table->integer('comment_count')->unsigned(); // displays comment count per post
                $table->dateTime('published_at'); //date published _at
                $table->timestamps();
                $table->softDeletes();
            }
        );
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
