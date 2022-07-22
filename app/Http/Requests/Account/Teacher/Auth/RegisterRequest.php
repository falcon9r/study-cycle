<?php

namespace App\Http\Requests\Account\Teacher\Auth;

use App\Models\Teacher;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'login' => [
                'required',
                 Rule::unique(Teacher::class , 'login'),
            ],
            'password' => 'required|string|min:4|max:12',
        ];
        
    }
}
