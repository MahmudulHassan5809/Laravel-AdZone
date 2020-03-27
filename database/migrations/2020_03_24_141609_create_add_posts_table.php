<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('division');
            $table->string('area');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('type');
            $table->string('images');
            $table->string('condition');
            $table->string('price');
            $table->string('brand_name')->nullable();
            $table->longText('description');
            $table->boolean('sold')->default(0);
            $table->boolean('active')->default(1);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('add_posts');
    }
}
