<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsTees2 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_tees', function($table)
        {
            $table->string('tee_color', 10);
            $table->dropColumn('color_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_tees', function($table)
        {
            $table->dropColumn('tee_color');
            $table->integer('color_id')->nullable();
        });
    }
}
