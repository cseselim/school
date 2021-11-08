<?php


namespace App\Models\Modules\Quiz;
use Illuminate\Database\Eloquent\Model;


class Quiz extends Model
{
    protected $table = 'quiz';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'is_common',
        'allow_late_submission',
        'mark_editable',
        'start_date_time',
        'end_date_time',
        'duration',
        'pass',
        'subject_id',
        'question_level_id',
        'total_mark',
        'total_question',
        'review_previous',
        'grease_time',
        'allow_retake',
        'author_id',
        'owner_id',
    ];
}
