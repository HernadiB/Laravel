<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
        "isbn" => ["required", "string", "size:13"],
        "title" => ["required", "string", "min:1", "max:50"],
        "title_original" => ["nullable", "string", "max:50"],
        "author" => ["nullable", "string", "max:30"],
        "episode" => ["nullable", "integer", "min:1", "max:254"],
        "series" => ["nullable", "string", "max:30"],
        "pages" => ["required", "integer", "min:10", "max:254"],
        "publisher" => ["required", "string", "min:1", "max:30"],
        "translator" => ["nullable", "integer", "max:30"],
        "category" => ["required", "string", "min:1", "max:20"]
        ];
    }
}
