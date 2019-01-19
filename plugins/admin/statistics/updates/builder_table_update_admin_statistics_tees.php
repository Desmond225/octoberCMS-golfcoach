<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsTees extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_tees', function($table)
        {
            $table->integer('color_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_tees', function($table)
        {
            $table->dropColumn('color_id');
        });
    }
}
