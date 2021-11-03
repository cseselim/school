<?php

namespace App\Repository\Modules\QuestionBank;
use App\Models\Modules\QuestionBank\Question;
use App\Models\Modules\QuestionBank\QuestionAttachment;
use App\Models\Modules\QuestionBank\QuestionOption;
use Illuminate\Http\Request;
use App\Services\fileUploades;

class QuestionBankRepository
{
    public function questionCreate(Request $request){
        dd(count($request->thumbnails));
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
        $this->createQuestionOption($request, $question->id);
        return $question;
    }

    /**
     * @param Request $request
     * @param int $questionId
     * @return QuestionOption
     */
    private function createQuestionOption(Request $request, int $questionId)
    {


        for ($i = 0; $i < count($request->options); $i++) {
            $questionsOption = QuestionOption::create(
                [
                    'question_id' => $questionId,
                    'options' => $request->options[$i],
                    'is_correct' => $request->checked[$i] == 1,
                    'img_has' => $request->thumbnails[$i] != '' ? '1' : '0',
                ]
            );

            //$this->createQuestionAttachment($request->thumbnails[$i], $questionId, $questionsOption->id);
        }
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
