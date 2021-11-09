<?php


namespace App\Request\Modules\Common;


class ClassRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function questionValidation()
    {
        return [
            'subject_id' => 'required',
            'question_level_id' => 'required',
            'title' => 'required',
            'mark' => 'required',
            'type' => 'required',
            'user_id' => 'required',
            'question_explanation' => 'required',
            'correct_answer' => 'required',
            'is_temp' => 'required',
            'img_has' => 'required',
        ];
    }
}
