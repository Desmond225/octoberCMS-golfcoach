<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatistics extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_', function($table)
        {
            $table->integer('course_id')->nullable()->unsigned();
            $table->integer('handicap_old')->nullable()->unsigned();
            $table->integer('score')->nullable()->unsigned();
            $table->integer('score_to_par')->nullable()->unsigned();
            $table->integer('handicap_new')->nullable()->unsigned();
            $table->increments('round_id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_', function($table)
        {
            $table->dropColumn('course_id');
            $table->dropColumn('handicap_old');
            $table->dropColumn('score');
            $table->dropColumn('score_to_par');
            $table->dropColumn('handicap_new');
            $table->increments('round_id')->unsigned()->change();
        });
    }
}
