<?php


namespace App\Http\Controllers\Modules\Common;
use App\Abstracts\Http\Controllers\InstituteController;
use App\Repository\Modules\Common\VersionRepository;
use App\Request\Modules\Common\VersionRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class VersionController extends InstituteController
{
    /**
     * Display a listing of the version.
     *
     * @return Response
     */
    public function index(VersionRepository $versionRepository)
    {
        return ['data'=> $versionRepository->getAll()];
    }


    /**
     * Store a newly created version in storage.
     *
     * @return Response
     */
    public function store(Request $request, VersionRequest $versionRequest, VersionRepository $versionRepository)
    {
        $this->validate($request, $versionRequest::VersionValidation());
        $id = $versionRepository->create($request);
        return response()->json(['message' => 'Version create successfully','id'=>$id], 201);
    }

    /**
     * Display the specified version.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(VersionRepository $versionRepository, int $id)
    {
        return ['data'=> $versionRepository->find($id)];
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
    public function update(Request $request,VersionRequest $versionRequest, VersionRepository $versionRepository,$id)
    {
        $this->validate($request, $versionRequest::VersionValidation());
        $data = $versionRepository->update($request,$id);
        return response()->json(['message' => 'Version update successfully','data'=>$data], 201);
    }

    /**
     * Remove the specified version from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(VersionRepository $versionRepository, int $id)
    {
        $versionRepository->versionDelete($id);
        return response()->json(['message' => 'Version delete successfully'], 201);
    }

}
