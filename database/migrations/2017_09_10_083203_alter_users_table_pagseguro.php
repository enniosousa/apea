<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTablePagseguro extends Migration {

    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->string('pagseguro_status_code')->nullable()->default(null)->after('fat_register');
            $table->string('pagseguro_status_name')->nullable()->default(null)->after('fat_register');
        });
    }

    public function down() {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('pagseguro_status_code');
            $table->dropColumn('pagseguro_status_name');
        });
    }

}
