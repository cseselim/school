<?php

namespace App\Repository\Modules\QuestionBank;
use App\Models\Modules\QuestionBank\Question;
use Illuminate\Http\Request;

class QuestionBankRepository
{
    public static function questionCreate(Request $request){
        $question = Question::create(
            [
                'subject_id' => $request->subject_id,
                'question_level_id' => $request->question_level_id,
                'title' => $request->title,
                'mark' => $request->mark,
                'type' => $request->type,
                'user_id' => $request->user_id,
                'question_explanation' => $request->question_explanation,
                'correct_answer' => $request->correct_answer,
                'is_temp' => $request->is_temp,
                'img_has' => $request->img_has,
            ]
        );

        return $question;
    }
}
