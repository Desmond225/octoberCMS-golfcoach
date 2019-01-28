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

    function getFront9IdOptions() {
        $front9 = CourseParts::orderBy('course_part')->lists('course_part', 'id');
        return $front9;
    }

    function getBackNineIdOptions() {
        $backNine = CourseParts::orderBy('course_part')->lists('course_part', 'id');
        return $backNine;
    }

    function getCoursePartIdOptions() {
        $coursePart = CourseParts::orderBy('course_part')->lists('course_part', 'id');
        return $coursePart;
    }

    function getCoursePartId2Options() {
        $coursePart2 = BackNine::orderBy('course_part')->lists('course_part', 'id');
        return $coursePart2;
    }




    public $belongsTo = [
        'round_type' => ['Admin\Statistics\Models\RoundTypes'],
        'course_venue' => ['Admin\Statistics\Models\CourseVenues'],
        'course_part' => ['Admin\Statistics\Models\CourseParts'],
        'back_nine' => ['Admin\Statistics\Models\Backnine'],
        'holes_played' => ['Admin\Statistics\Models\HolesPlayed'],
        'tee_color' => ['Admin\Statistics\Models\Tees'],
    ];
}

