<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsStats extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_stats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('fir')->nullable();
            $table->integer('gir')->nullable();
            $table->integer('putts')->nullable();
            $table->integer('scramble')->nullable();
            $table->integer('sandies')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_stats');
    }
}
