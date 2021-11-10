<?php


namespace App\Models\Modules\Common;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class_id',
        'version_id',
        'name',
        'code',
        'image_url',
        'priority'
    ];
}
