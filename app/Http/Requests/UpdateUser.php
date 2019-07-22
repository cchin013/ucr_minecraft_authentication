<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'minecraft_username' => ['nullable', 'string', 'min:3', 'max: 16', 'unique:users,minecraft_username'],
            'discord_id' => ['nullable', 'string', 'unique:users,discord_id', 'regex:/^.*#[0-9]+$/i']
        ];
    }
}
