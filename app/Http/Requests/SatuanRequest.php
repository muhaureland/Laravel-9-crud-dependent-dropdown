<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SatuanRequest extends FormRequest
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
            'nama'    => 'required|string|min:4',
            'category_id'   => 'required',
            'course_id'      => 'required',
            'jumlah'        => 'required|min:1|numeric'
        ];
    }
}
