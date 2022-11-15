<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
         'title' => 'required|min:50|max:255|unique:posts',
         'content' =>'required'
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'Title is Required.',
            'title.min' => 'Title Length Smaller then 50.',
            'title.max' => 'Title  Length Bigger then 250.',
            'title.unique' => 'Title is taken before.',
            'content.required' => 'Content is Required.',

        ];
    }

    
}
