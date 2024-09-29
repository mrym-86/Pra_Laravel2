<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FurnitureRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>['required','string','max:255'],
            'price' =>['required','integer','max:9999999'],
            'details' =>['required','string','max:255'],
            'color' =>['required','string','max:255'],
            'material' =>['required','string','max:255'],
        ];
        
    }

    public function message()
    {
        return [
            //ブランクの場合のメッセージ
            'content.required' => '内容を入力してください。',

            //入力内容が条件を満たさない場合のメッセージ
            'content.error' => '入力内容が正しくありません。'
        ];
    }
}
