<?php


namespace App\Request\Modules\Common;


class ClassRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function classValidation()
    {
        return [
            'name' => 'required',
            'priority' => 'required',
            'display_name' => 'required',
            'code' => 'required',
        ];
    }
}
