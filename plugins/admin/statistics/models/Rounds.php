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

    function getHolesPlayedOptions()  {
        $holesPlayed = HolesPlayed::orderBy('holes_played')->lists('holes_played', 'id');
        return $holesPlayed;
    }

    function getTeeColorIdOptions() {
        $teeColors = Tees::orderBy('tee_color')->lists('tee_color', 'id');
        return $teeColors;
    }

    public $belongsTo = [
        'round_type' => ['Admin\Statistics\Models\RoundTypes'],
        'course' => ['Admin\Statistics\Models\Courses'],
        'holes_played' => ['Admin\Statistics\Models\HolesPlayed'],
        'tee_color' => ['Admin\Statistics\Models\Tees'],
    ];
}

