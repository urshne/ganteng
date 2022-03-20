<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
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
            'judul' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'tanggal_beli' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul harus diisi!',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun Penerbit harus diisi',
            'tanggal_beli.required' => 'Tanggal Beli harus diisi',
            'harga.required' => 'Harga harus diisi',
            'qty.required' => 'QTY harus diisi',
        ];
    }
}
