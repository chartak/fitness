<?php

namespace App\Http\Requests;

use App\Treainer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreTreainerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('treainer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'fullname'    => [
                'min:2',
                'max:200',
                'required',
            ],
            'description' => [
                'required',
            ],
            'photo'       => [
                'required',
            ],
            'types.*'     => [
                'integer',
            ],
            'types'       => [
                'required',
                'array',
            ],
            'branches.*'  => [
                'integer',
            ],
            'branches'    => [
                'required',
                'array',
            ],
        ];
    }
}
