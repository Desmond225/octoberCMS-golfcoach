<?php namespace Admin\Statistics\Models;

use Model;
use Admin\Statistics\Models\RoundTypes;
use Admin\Statistics\Models\Courses;

/**
 * Model
 */

class Rounds extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_statistics_rounds';


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    function getRoundTypeIdOptions() {
        $roundTypes = RoundTypes::orderBy('name')->lists('name', 'id');
        return $roundTypes;
    }

    function getCourseIdOptions() {
        $courses = Courses::orderBy('name')->lists('name', 'id');
        return $courses;
    }

    public $belongsTo = [
        'round_type' => ['Admin\Statistics\Models\RoundTypes'],
        'course' => ['Admin\Statistics\Models\Courses'],
    ];
}

