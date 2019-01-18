<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminStatisticsCourse extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_statistics_course');
    }
    
    public function down()
    {
        Schema::create('admin_statistics_course', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->string('tee', 191)->nullable();
            $table->decimal('slope_rate', 10, 0)->nullable();
            $table->decimal('course_rate', 10, 0)->nullable();
        });
    }
}
