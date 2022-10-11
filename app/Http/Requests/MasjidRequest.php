<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasjidRequest extends FormRequest
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
            'nama' => 'required',
            'alamat' => 'required',
            'warna' => 'required',
            'penanggung_jawab' => 'required',
            'nohp' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg|',
        ];
    }
}
