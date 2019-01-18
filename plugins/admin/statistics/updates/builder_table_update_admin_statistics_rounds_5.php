<?php namespace Admin\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminStatisticsRounds5 extends Migration
{
    public function up()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->integer('round_type_id')->nullable();
            $table->dropColumn('round_type');
        });
    }
    
    public function down()
    {
        Schema::table('admin_statistics_rounds', function($table)
        {
            $table->dropColumn('round_type_id');
            $table->string('round_type', 191)->nullable();
        });
    }
}
