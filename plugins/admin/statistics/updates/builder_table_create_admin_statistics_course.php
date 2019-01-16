<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsCourse extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_course', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('tee')->nullable();
            $table->decimal('slope_rate', 10, 0)->nullable();
            $table->decimal('course_rate', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_course');
    }
}
