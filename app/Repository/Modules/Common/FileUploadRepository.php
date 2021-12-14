<?php

namespace App\Repository\Modules\Common;
use Illuminate\Http\Request;
use App\Services\fileUploades;
use Illuminate\Support\Facades\DB;

class FileUploadRepository
{
    /**
     * @param string $url
     * @param int $questionId
     * @param int $questionsOptionId
     * @return mixed
     */

    public function create(Request $request){
        return fileUploades::fileUpload($request, 'file_name');
    }
}

