<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsCourses2 extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_courses');
    }
}
