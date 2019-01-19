<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds10 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->integer('tee_color_id')->nullable();
            $table->dropColumn('tee');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->dropColumn('tee_color_id');
            $table->string('tee', 191);
        });
    }
}
