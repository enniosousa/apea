<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagseguroNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function (Blueprint $table) {
            $table->string('pagseguro_code')->nullable()->default(null);
            $table->string('pagseguro_link')->nullable()->default(null);
            $table->string('pagseguro_status_code')->nullable()->default(null);
            $table->string('pagseguro_status_name')->nullable()->default(null);
            $table->float('pagseguro_value')->nullable()->default(null);
        });
        Schema::create('pagseguro_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('reference');
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
        Schema::dropIfExists('pagseguro_notifications');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('pagseguro_code');
            $table->dropColumn('pagseguro_link');
            $table->dropColumn('pagseguro_status_code');
            $table->dropColumn('pagseguro_status_name');
            $table->dropColumn('pagseguro_value');
        });
    }
}
