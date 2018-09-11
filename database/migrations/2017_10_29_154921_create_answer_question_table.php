<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_question', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('question_id')->unsigned();            
            $table->integer('answer_id')->unsigned();
            
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('question_id')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('answer_id')->references('id')->on('answers')->onUpdate('cascade')->onDelete('cascade');
            
            $table->primary(['user_id', 'question_id', 'answer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answer_question', function (Blueprint $table) {
            //$table->dropForeign(['user_id']);
            //$table->dropForeign(['question_id']);
            //$table->dropForeign(['answer_id']);
            
            $table->dropPrimary(['user_id', 'question_id', 'answer_id']);
        });
        Schema::dropIfExists('answer_question');
    }
}
