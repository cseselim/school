<?php


namespace App\Repository\Modules\Common;


use App\Models\Modules\Common\Subject;
use App\Services\fileUploades;
use Illuminate\Http\Request;

class SubjectRepository
{
    public function create(Request $request){

        //$image_url = fileUploades::fileUpload($request, 'image_url');

        $version = Subject::create(
            [
                'class_id' => $request->class_id,
                'version_id' => $request->version_id,
                'name' => $request->name,
                'code' => $request->code,
                'image_url' => $request->image_url,
                'priority' => $request->priority,
            ]
        );
        return $version;
    }

    public function getAll(){
        return Subject::all();
    }

    public function find( int $id){
        return Subject::select('*')->find($id);
    }

    public function update($request, $id){
        $data = [
            'class_id' => $request->class_id,
            'version_id' => $request->version_id,
            'name' => $request->name,
            'code' => $request->code,
            'image_url' => $request->image_url,
            'priority' => $request->priority,
        ];
        return Subject::where('id', $id)->update($data);
    }

    public function subjectDelete($id){
        return Subject::where('id',$id)->delete();
    }

}
