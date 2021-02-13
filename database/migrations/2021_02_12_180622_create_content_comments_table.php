<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_comments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('content_id');
            $table->unsignedBigInteger('user_id');
            $table->string('text');
            $table->boolean('validated')->default(false);
            $table->timestamps();

            $table->foreign('content_id')
                ->references('id')->on('contents');

            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_comments');
    }
}
