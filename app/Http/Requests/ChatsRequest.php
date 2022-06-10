<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChatsRequest extends FormRequest
{
   public function rules()
    {
        return [
            'chat.message' => 'required|string|max:200',
        ];
    }
}
