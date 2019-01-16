<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminStatisticsRoundType extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_statistics_round_type');
    }
    
    public function down()
    {
        Schema::create('admin_statistics_round_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('round_type', 191)->nullable();
            $table->date('date');
        });
    }
}
