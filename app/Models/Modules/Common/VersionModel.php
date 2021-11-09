<?php


namespace App\Models\Modules\Common;
use Illuminate\Database\Eloquent\Model;

class VersionModel extends  Model
{
    protected $table = 'versions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'is_active'
    ];
}
