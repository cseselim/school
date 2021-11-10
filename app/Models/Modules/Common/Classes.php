<?php


namespace App\Models\Modules\Common;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Classes extends Model
{
    protected $table = 'classes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'priority',
        'display_name',
        'code'
    ];
}
