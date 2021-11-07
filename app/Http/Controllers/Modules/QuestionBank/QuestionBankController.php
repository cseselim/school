<?php

namespace App\Http\Controllers\Modules\QuestionBank;

use App\Exceptions\CustomException;
use App\Http\Controllers\Controller;
use App\Models\Modules\QuestionBank\Question;
use App\Repository\Modules\QuestionBank\QuestionBankRepository;
use App\Request\Modules\QuestionBank\QuestionBankRequest;
use Illuminate\Http\Request;

class QuestionBankController extends Controller
{

    public function index()
    {
        echo "index";
    }

    /**
     * @throws CustomException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, QuestionBankRequest $questionBankRequest, QuestionBankRepository $questionBankRepository)
    {
        $this->validate($request, $questionBankRequest::questionValidation());

        if ($request->type == 1 || $request->type == 2){
            $this->validate($request, $questionBankRequest::questionOptionsValidation());
        }

        $id = $questionBankRepository->create($request);

        return response()->json(['message' => 'Question created successfully', 'id' => $id], 201);
    }


}

