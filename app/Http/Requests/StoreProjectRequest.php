<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         if(! Auth::id()){
             return false;
         }
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
            "name"=> "required|string|min:5",
            "description"=>"required|string",
            "cover_img"=>"required|image",
            "github_link"=>"nullable|string|url",
            "completed"=> "boolean",
        ];
    }
}
//  validazione nelle checkbox => accepted il campo puo esssere on 1, 0 , true 

//request->has() ci è stato inviato?


