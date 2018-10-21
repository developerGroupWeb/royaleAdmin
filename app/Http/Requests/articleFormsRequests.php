<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articleFormsRequests extends FormRequest
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
            'title'    => ['required', 'max:100', 'string'],
            'rubric'   => ['required','string'],
            'content'  => ['required', 'max:400', 'string'],
            'contents' => ['required', 'string'],
            'position' => ['required', 'string'],
            'picture'  => ['required', 'file', 'max:1024'],
            'other_picture' => ['required', 'file', 'max:10024'],
        ];
    }
}
