<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('speaker');
            $table->text('description');
            $table->string('type');
            $table->unsignedSmallInteger('vacancies');
            $table->string('place');
            $table->timestamps();
        });

        Schema::create('activities_dates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->datetime('start');
            $table->datetime('end');
            $table->timestamps();

            $table->foreign('activity_id')->references('id')->on('activities')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('activities_dates', function(Blueprint $table) {
            $table->dropForeign(['activity_id']);
        });
        Schema::dropIfExists('activities_dates');
        Schema::dropIfExists('activities');
    }

}
