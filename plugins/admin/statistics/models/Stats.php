<?php namespace Admin\Statistics\Models;

use Model;

/**
 * Model
 */
class Stats extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_statistics_stats';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
