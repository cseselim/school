<?php


namespace App\Request\Modules\Common;


class SubjectRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function subjectValidation()
    {
        return [
            'class_id' => 'required',
            'version_id' => 'required',
            'name' => 'required',
            'code' => 'required',
            'image_url' => 'required',
            'priority' => 'required'
        ];
    }
}
