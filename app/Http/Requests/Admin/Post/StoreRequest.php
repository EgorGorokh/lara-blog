<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string',
            'content'=>'required|string',
            'preview_image'=>'required|file',
            'main_image'=>'required|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id',

        ];
    }



public function messages(){
    return[
'title.required'=>'Это поле необходимо для заполнения',
'title.required'=>'Данные должны соответстовать строчному типу',
'content.required'=>'Это поле необходимо для заполнения',
'content.required'=>'Данные должны соответстовать строчному типу',
'preview_image.required'=>'Это поле небходимо для заполнения',
'preview_image.file'=>'Небходимо выбрать файл',
'main_image.required'=>'Это поле небходимо для заполнения',
'main_image.file'=>'Небходимо выбрать файл',
'category_id.required'=>'Это поле небходимо для заполнения',
'category_id.integer'=>'айди категории должен быть числом',
'category_id.exists'=>'айди категории должен быть в базе',
'tag_ids.array'=>'необходимо отправить массив данных',


    ];
}


}
