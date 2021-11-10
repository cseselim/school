<?php


namespace App\Http\Controllers\Modules\Common;
use App\Http\Controllers\Controller;
use App\Repository\Modules\Common\ClassRepository;
use App\Request\Modules\Common\ClassRequest;
use App\Request\Modules\Common\VersionRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class ClassController extends controller
{
    /**
     * Display a listing of the version.
     *
     * @return Response
     */
    public function index(classRepository $classRepository)
    {
        return ['data'=> $classRepository->getAll()];
    }


    /**
     * Store a newly created version in storage.
     *
     * @return Response
     */
    public function store(Request $request, ClassRequest $classRequest, classRepository $classRepository)
    {
        $this->validate($request, $classRequest::classValidation());
        $id = $classRepository->create($request);
        return response()->json(['message' => 'Class create successfully','id'=>$id], 201);
    }

    /**
     * Display the specified version.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(classRepository $classRepository, int $id)
    {
        return ['data'=> $classRepository->find($id)];
    }

    /**
     * Show the form for editing the specified version.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified version in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,ClassRequest $classRequest, classRepository $classRepository,$id)
    {
        $this->validate($request, $classRequest::ClassValidation());
        $id = $classRepository->update($request,$id);
        return response()->json(['message' => 'Class update successfully','id'=>$id], 201);
    }

    /**
     * Remove the specified version from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(classRepository $classRepository, int $id)
    {
        $classRepository->versionDelete($id);
        return response()->json(['message' => 'Class delete successfully'], 201);
    }
}
