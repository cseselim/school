<?php


namespace App\Http\Controllers\Modules\Common;
use App\Http\Controllers\Controller;
use App\Repository\Modules\Common\SubjectRepository;
use App\Request\Modules\Common\SubjectRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the version.
     *
     * @return Response
     */
    public function index(SubjectRepository $subjectRepository)
    {
        return ['data'=> $subjectRepository->getAll()];
    }


    /**
     * Store a newly created version in storage.
     *
     * @return Response
     */
    public function store(Request $request, SubjectRequest $subjectRequest, SubjectRepository $subjectRepository)
    {
        $this->validate($request, $subjectRequest::subjectValidation());
        $id = $subjectRepository->create($request);
        return response()->json(['message' => 'Subject create successfully','id'=>$id], 201);
    }

    /**
     * Display the specified version.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(SubjectRepository $subjectRepository, int $id)
    {
        return ['data'=> $subjectRepository->find($id)];
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
    public function update(Request $request,SubjectRequest $subjectRequest, SubjectRepository $subjectRepository,$id)
    {
        $this->validate($request, $subjectRequest::SubjectValidation());
        $id = $subjectRepository->update($request,$id);
        return response()->json(['message' => 'Subject update successfully','id'=>$id], 201);
    }

    /**
     * Remove the specified version from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(SubjectRepository $subjectRepository, int $id)
    {
        $subjectRepository->subjectDelete($id);
        return response()->json(['message' => 'Subject delete successfully'], 201);
    }
}
