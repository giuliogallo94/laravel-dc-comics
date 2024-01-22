<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                    'title' => 'required|min:2|max:250',
                    'description' => 'nullable',
                    'thumb' => 'required|url',
                    'price' => 'required|decimal:2',
                    'series' => 'required|min:5|max:250',
                    'sale_date' => 'required|date',
                    'type' => 'required|min:5|max:250'
                ]; 
    }
}
