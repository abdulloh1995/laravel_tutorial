<?php

namespace App\Http\Requests\Income;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'sum' => 'integer',
            'currency' => 'integer',
            'short_info' => '',
            'created_at' => 'date',
            'client_id' => 'integer',
            'types' => ''
        ];
    }
}
