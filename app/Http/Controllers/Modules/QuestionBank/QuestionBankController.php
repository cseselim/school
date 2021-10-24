<?php

namespace App\Http\Controllers\Modules\QuestionBank;

use App\Exceptions\CustomException;
use App\Http\Controllers\Controller;
use App\Models\Modules\QuestionBank\Question;
use App\Repository\Modules\QuestionBank\QuestionBankRepository;
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
    public function store(Request $request, QuestionBankRepository $questionBankRepository)
    {

    }

    /**
     * @throws CustomException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, QuestionBankRepository $questionBankRepository, $id)
    {

    }

    /**
     * @throws CustomException
     */
    public function show(QuestionBankRepository $questionBankRepository, $id)
    {

    }

}

