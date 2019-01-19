<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsHolesPlayed extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_holes_played', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('holes_played')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_holes_played');
    }
}
