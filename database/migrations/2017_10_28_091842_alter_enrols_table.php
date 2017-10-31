<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEnrolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrols', function (Blueprint $table) {
            $table->uuid('code')->after('activity_id');
        });
        $enrols = \App\Enrol::all();
        foreach($enrols as $enrol){
            $enrol->code = (string) Uuid::generate();
            $enrol->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrols', function (Blueprint $table) {
            $table->dropColumn('code');
        });
    }
}
