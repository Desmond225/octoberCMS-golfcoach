<?php namespace Admin\Statistics\Models;

use Model;
use Admin\Statistics\Models\RoundTypes;
use Admin\Statistics\Models\Courses;
use Carbon\Carbon;

/**
 * Model
 */

class Rounds extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $dates = [];

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

    // function getCourseIdOptions() {
    //     $courseId = CourseDetails::orderBy('name')->lists('name', 'id');
    //     return $courseId;
    // }

    function getCourseVenueIdOptions() {
        $courseVenue = CourseVenues::orderBy('course_venue')->lists('course_venue', 'id');
        return $courseVenue;
    }

    function getHolesPlayedOptions()  {
        $holesPlayed = HolesPlayed::orderBy('holes_played')->lists('holes_played', 'id');
        return $holesPlayed;
    }

    function getTeeColorIdOptions() {
        $teeColors = Tees::orderBy('tee_color')->lists('tee_color', 'id');
        return $teeColors;
    }

    function getFrontNineIdOptions() {
        $front9 = FrontNine::orderBy('front_nine')->lists('front_nine', 'id');
        return $front9;
    }

    function getBackNineIdOptions() {
        $backNine = BackNine::orderBy('back_nine')->lists('back_nine', 'id');
        return $backNine;
    }

    public $belongsTo = [
        'round_type' => ['Admin\Statistics\Models\RoundTypes'],
        'course_venue' => ['Admin\Statistics\Models\CourseVenues'],
        'front_nine' => ['Admin\Statistics\Models\FrontNine'],
        'back_nine' => ['Admin\Statistics\Models\Backnine'],
        'holes_played' => ['Admin\Statistics\Models\HolesPlayed'],
        'tee_color' => ['Admin\Statistics\Models\Tees'],
    ];


    public static function getRounds() 
    {
        
        $rounds = Rounds::whereBetween('date', [date('2018-01-01'), date('2019-01-01')])->get();
        // $rounds2017 = Rounds::whereBetween('date', [date('2017-01-01'), date('2018-01-01')]);
        // $rounds2018 = Rounds::whereBetween('date', [date('2018-01-01'), date('2019-01-01')]);
        // $roundsunder75 = Rounds::where('score', '<', 75);
        // $whitetees = Rounds::where('tee_color_id', '=', '1');
        // $yellowtees = Rounds::where('tee_color_id', '=', '2');
        // $tournaments = Rounds::where('round_type_id', '=', '3');
        // $rounds2018under80 = Rounds::whereBetween('date', [date('2018-01-01'), date('2019-01-01')])->where('score', '<', 80);
        
        return $rounds;
        
    }
}

