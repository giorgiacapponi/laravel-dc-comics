<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|min:3|max:80',
            'description'=>'required|min:3',
            'thumb'=>'required',
            'price'=>'required|min:2|max:10',
            'series'=>'required|min:5|max:80',
            'sale_date'=>'required|date',
            'type'=>'required|min:3|max:20',
        ];
    }

    public function messages()
    {

        return [
            'title.required'=>'questo campo non puo essere vuoto',
            'title.min'=> 'devi inserire un titolo di :min caratteri',
            'title.max'=>'non puoi superare :max caratteri',
            'description.required'=>'questo campo non puo essere vuoto',
            'price.required'=>'questo campo non puo essere vuoto',
            'series.required'=>'questo campo non puo essere vuoto',
            'sale_date.required'=>'questo campo non puo essere vuoto',
            'type.required'=>'questo campo non puo essere vuoto'
           
        ];
    }
}
