<?php


namespace App\Request\Modules\Quiz;


class QuizRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function quizValidation()
    {
        return [
            'title' => 'required',
            'start_date_time' => 'required',
            'end_date_time' => 'required',
            'duration' => 'required',
            'subject_id' => 'required',
            'pass' => 'required',
            'is_common' => 'required',
            'question_level_id' => 'required',
            'allow_late_submission' => 'required',
            'review_previous' => 'nullable',
            'grease_time' => 'nullable',
            'author_id' => 'nullable',
            'owner_id' => 'nullable',
        ];
    }
}
