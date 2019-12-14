<?php

namespace App\Http\Requests;

use App\ClubCart;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateClubCartRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('club_cart_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'      => [
                'required',
            ],
            'timefrom'  => [
                'required',
            ],
            'duration'  => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'branch_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
