<?php


namespace App\Http\Controllers\Modules\Common;
use App\Http\Controllers\Controller;
use App\Repository\Modules\Common\FileUploadRepository;
use App\Request\Modules\Common\ClassRequest;
use App\Request\Modules\Common\VersionRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class FileUploadController extends controller
{

    /**
     * Store a newly created version in storage.
     *
     * @return Response
     */
    public function store(Request $request, FileUploadRepository $fileuploadrepository)
    {
        $this->validate($request,[
            'file_name' => 'required',
        ]);

        $fileUrl = $fileuploadrepository->create($request);
        return response()->json(['message' => 'Class create successfully','url'=>$fileUrl], 201);
    }

}
