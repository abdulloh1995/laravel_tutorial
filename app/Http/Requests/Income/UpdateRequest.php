<?php

namespace App\Http\Requests\Income;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'userid' => 'integer',
            'sum' => 'required|integer',
            'currency' => 'integer',
            'short_info' => '',
            'created_at' => 'date',
            'client_id' => 'integer',
            'types' => ''
        ];
    }
}
