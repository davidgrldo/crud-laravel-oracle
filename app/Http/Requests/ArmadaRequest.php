<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArmadaRequest extends FormRequest
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
            'kode_karyawan' => 'required',
            'kode_armada'   => 'required',
            'nama_armada'   => 'required',
            'jumlah_dibawa' => 'required'
        ];
    }
}