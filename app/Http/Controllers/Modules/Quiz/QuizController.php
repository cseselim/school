<?php


namespace App\Http\Controllers\Modules\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Request\Modules\Quiz\QuizRequest;
use App\Repository\Modules\Quiz\QuizRepository;


class QuizController extends Controller
{
    public function index()
    {
        echo "index";
    }

    /**
     * @throws CustomException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, QuizRequest $quizRequest, QuizRepository $QuizRepository)
    {
        $this->validate($request, $quizRequest::quizValidation());
        $QuizRepository->create($request);
        return response()->json(['message' => 'Quiz created successfully'], 201);
    }

}
