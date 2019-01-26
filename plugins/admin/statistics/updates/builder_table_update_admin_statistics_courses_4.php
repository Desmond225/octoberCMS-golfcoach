<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsCourses4 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->smallInteger('course')->nullable()->unsigned()->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_courses', function($table)
        {
            $table->integer('course')->nullable()->unsigned()->default(null)->change();
        });
    }
}
