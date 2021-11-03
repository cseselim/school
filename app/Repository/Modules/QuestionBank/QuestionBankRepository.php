<?php

namespace App\Repository\Modules\QuestionBank;
use App\Models\Modules\QuestionBank\Question;
use App\Models\Modules\QuestionBank\QuestionAttachment;
use Illuminate\Http\Request;
use App\Services\fileUploades;

class QuestionBankRepository
{
    public function questionCreate(Request $request){

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

        $this->createQuestionAttachment(fileUploades::fileUpload($request), $question->id);
        return $question;
    }



    /**
     * @param string $url
     * @param int $questionId
     * @param int $questionsOptionId
     * @return mixed
     */
    private function createQuestionAttachment($url, int $questionId, int $questionsOptionId = 0)
    {
        if ($url == '' || $url == null) {
            return false;
        }
        return QuestionAttachment::create(
            [
                'file' => $url,
                'question_id' => $questionId,
                'questions_option_id' => $questionsOptionId,
            ]
        );
    }
}
