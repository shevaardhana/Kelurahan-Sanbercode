<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
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
            'nama_desa' => 'required',
            'jumlah_pria' => 'required',
            'jumlah_wanita' => 'required',
            'jumlah_kematian' => 'required',
            'jumlah_kelahiran' => 'required',
            'keterangan' => 'max:255'
        ];
    }
}
