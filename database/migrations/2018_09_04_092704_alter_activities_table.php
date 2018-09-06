<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->unsignedTinyInteger('workload')->after('vacancies');
            $table->boolean('has_certificate')->default(true)->after('vacancies');
            $table->boolean('auto_enrol')->default(false)->after('vacancies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('workload');
            $table->dropColumn('has_certificate');
            $table->dropColumn('auto_enrol');
        });
    }
}
