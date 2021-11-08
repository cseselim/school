<?php


namespace App\Repository\Modules\Quiz;
use App\Models\Modules\Quiz\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizRepository
{
    private function QuizCreate(Request $request){
        $quiz = Quiz::create(
            [
                'title' => $request->title,
                'is_common' => $request->is_common,
                'start_date_time' => $request->start_date_time,
                'end_date_time' => $request->end_date_time,
                'duration' => $request->duration,
                'subject_id' => $request->subject_id,
                'pass' => $request->pass,
                'question_level_id' => $request->question_level_id,
                'allow_late_submission' => $request->allow_late_submission,
                'review_previous' => $request->review_previous,
                'grease_time' => $request->grease_time,
                'author_id' => $request->author_id,
                'owner_id' => $request->owner_id,
            ]
        );
        return $quiz;
    }

    public function create(Request $request){
        DB::beginTransaction();
        try {
            $this->QuizCreate($request);
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }
}
