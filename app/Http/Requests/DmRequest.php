<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DmRequest extends FormRequest
{
   public function rules()
    {
        return [
            'Dm.message' => 'required|string|max:200',
        ];
    }
}