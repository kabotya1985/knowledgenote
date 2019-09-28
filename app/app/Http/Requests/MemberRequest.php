<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name'=>['required','max:20'],
            'email'=>['required','max:200','email'],
            'password'=>['required','min:8'],
        ];
    }

    public function messages()
    {
      return [
        'name.required' => '名前を入力してください。',
        'name.max' => '名前は最大20文字で入力してください。',
        'email.required' => 'メールアドレスを入力してください。',
        'email.email' => 'メールアドレスとして正しい形式ではありません。',
        'email.max' => 'メールアドレスは最大200文字で入力してください。',
        'password.required' => 'パスワードを入力してください。',
        'password.min' => 'パスワードは8文字以上で入力してください。'
      ];


    }

}
