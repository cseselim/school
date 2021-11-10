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
        return Classes::select('id','name','code')->get();
    }

    public function find( int $id){
        return Classes::select('id','name','code')->find($id);
    }

    public function update($request, $id){
        $data = [
            'name' => $request->name,
            'priority' => $request->priority,
            'display_name' => $request->display_name,
            'code' => $request->code,
        ];
        return Classes::where('id', $id)->update($data);
    }

    public function versionDelete($id){
        return Classes::where('id',$id)->delete();
    }
}
