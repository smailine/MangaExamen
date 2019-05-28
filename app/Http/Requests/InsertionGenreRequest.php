<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertionGenreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'lib_genre' => 'required|min:5|max:45|alpha'
        ];
    }
}
