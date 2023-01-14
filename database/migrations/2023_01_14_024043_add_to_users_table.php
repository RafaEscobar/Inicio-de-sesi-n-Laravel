<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('app')->after('name');
            $table->date('fn')->after('app');
            $table->string('gen')->after('fn');
            $table->text('datos')->after('gen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('app');
            $table->dropColumn('fn');
            $table->dropColumn('gen');
            $table->dropColumn('datos');
        });
    }
};
