<?php


namespace App\Repository\Modules\Common;
use App\Models\Modules\Common\Classes;
use Illuminate\Http\Request;

class ClassRepository
{
    public function create(Request $request){
        $version = Classes::create(
            [
                'name' => $request->name,
                'priority' => $request->priority,
                'display_name' => $request->display_name,
                'code' => $request->code,
            ]
        );
        return $version;
    }

    public function getAll(){
        return Classes::select('*')->get();
    }

    public function find( int $id){
        return Classes::select('*')->find($id);
    }

    public function update($request, $id){
        $data = [
            'name' => $request->name,
            'priority' => $request->priority,
            'display_name' => $request->display_name,
            'code' => $request->code,
        ];
        Classes::where('id', $id)->update($data);
        return Classes::select('*')->find($id);
    }

    public function classDelete($id){
        return Classes::where('id',$id)->delete();
    }
}
