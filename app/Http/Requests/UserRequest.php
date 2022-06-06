<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user.level'=> 'required|intger|max:100',
            'user.battle_royale_rank' => 'required|string|max:100',
            'user.arena_rank' => 'required|string|max:4000',
             'user.offer' => 'required|string|max:100',
            
            'user.level'=> 'required|intger|max:100',
            'user.rank' => 'required|string|max:100',
             'user.offer' => 'required|string|max:100',
            
            'user.level'=> 'required|intger|max:100',
            'user.rank' => 'required|string|max:100',
             'user.offer' => 'required|string|max:100',
            
            
            
            
            
        ];
    }
}
