<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourseDetails extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->integer('course_id')->nullable()->unsigned()->change();
            $table->integer('tee_id')->nullable()->unsigned()->change();
            $table->integer('par')->nullable()->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_course_details', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->integer('course_id')->nullable(false)->unsigned(false)->change();
            $table->integer('tee_id')->nullable(false)->unsigned(false)->change();
            $table->integer('par')->nullable(false)->unsigned(false)->change();
        });
    }
}
