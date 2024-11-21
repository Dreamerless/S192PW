<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\True_;


class validadorClientes extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtnombre'=>'required|min:5|max:25',
            'txtapellido'=>'required|min:5|max:25',
            /* 'txtcorreo'=>'required|email:rfc,dns', */
            'txttelefono'=>'required|numeric'
        ];
    }
}
