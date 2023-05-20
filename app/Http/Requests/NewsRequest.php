<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|max:255',
            'author_name' => 'required|max:255',
            'author_surname' => 'required|max:255',
            'text' => 'required|max:2550',
            'id_category' => 'required|integer|max:10',
        ];
    }

    public function messages()
    {
        return [

        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок новости',
            'text' => 'Текст новости'
        ];
    }
}
