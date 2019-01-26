<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsCourseDetails extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_course_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('tee_id');
            $table->integer('par');
            $table->smallInteger('cr');
            $table->decimal('sr', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_course_details');
    }
}
