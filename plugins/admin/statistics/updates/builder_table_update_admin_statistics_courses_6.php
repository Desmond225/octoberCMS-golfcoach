<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourses6 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->integer('course_id')->unsigned();
            $table->dropColumn('name');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->dropColumn('course_id');
            $table->string('name', 191);
        });
    }
}
