<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminStatisticsTees extends Migration
{
    public function up()
    {
        Schema::create('admin_statistics_tees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_statistics_tees');
    }
}
