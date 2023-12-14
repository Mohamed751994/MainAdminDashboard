<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'type' => 'required|in:contact,service,solution,industry,career',
            'type_id' => 'nullable',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|min:8|max:20',
            'message' => 'nullable',
            'cv' =>'nullable|mimes:pdf,doc,docx|max:5000' ,
        ];

    }

    public function messages()
    {
        return [
            'type.required' =>__('text.typeRequired'),
            'type.in' =>__('text.typeIn'),
            'name.required' =>__('text.nameRequired'),
            'name.max' =>__('text.nameMax'),
            'email.required' =>__('text.emailRequired'),
            'email.max' =>__('text.emailMax'),
            'phone.required' =>__('text.phoneRequired'),
            'phone.min' =>__('text.phoneMin'),
            'phone.max' =>__('text.phoneMax'),
            'cv.mimes' =>__('text.cvMimes'),
            'cv.max' =>__('text.cvMax'),
        ];
    }



}
