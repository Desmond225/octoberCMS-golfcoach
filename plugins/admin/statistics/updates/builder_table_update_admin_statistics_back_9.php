<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsBack9 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_back_9', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('course_part')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_back_9', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->smallInteger('course_part')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
