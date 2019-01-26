<?php namespace Admin\Statistics\Models;

use Model;

/**
 * Model
 */
class CourseDetails extends Model
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

    public $table = 'admin_statistics_course_details';

    /**
     * @var array Validation rules
     */

    public $rules = [
    ];

    function getCourseVenueIdOptions() {
        $courseVenues = CourseVenues::orderBy('course_venue')->lists('course_venue', 'id');
        return $courseVenues;
    }

    function getCoursePartIdOptions() {
        $courseVenues = CourseParts::orderBy('course_part')->lists('course_part', 'id');
        return $courseVenues;
    }

    function getTeeColorIdOptions() {
        $teeColors = Tees::orderBy('tee_color')->lists('tee_color', 'id');
        return $teeColors;
    }

    public $belongsTo = [
        'round_type' => ['Admin\Statistics\Models\RoundTypes'],
        'course_venue' => ['Admin\Statistics\Models\CourseVenues'],
        'course_part' => ['Admin\Statistics\Models\CourseParts'],
        'holes_played' => ['Admin\Statistics\Models\HolesPlayed'],
        'tee_color' => ['Admin\Statistics\Models\Tees'],
    ];
}