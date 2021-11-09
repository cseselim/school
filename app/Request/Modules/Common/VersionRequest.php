<?php

namespace App\Request\Modules\Common;

class VersionRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function VersionValidation()
    {
        return [
            'name' => 'required',
            'code' => 'required',
            'is_active' => 'nullable'
        ];
    }

}
