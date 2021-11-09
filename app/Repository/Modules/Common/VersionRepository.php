<?php


namespace App\Repository\Modules\Common;
use App\Models\Modules\Common\VersionModel;
use Illuminate\Http\Request;

class VersionRepository
{
    public function create(Request $request){
        $version = VersionModel::create(
            [
                'name' => $request->name,
                'code' => $request->code,
            ]
        );
        return $version;
    }

    public function getAll(){
        return VersionModel::select('id','name','code')->get();
    }

    public function find( int $id){
        return VersionModel::select('id','name','code')->find($id);
    }

    public function update($request, $id){
        $data = [
            'name' => $request->name,
            'code' => $request->code,
        ];
        if ($request->is_active){
            $data['is_active'] = $request->is_active;
        }
        return VersionModel::where('id', $id)->update($data);
    }

}
