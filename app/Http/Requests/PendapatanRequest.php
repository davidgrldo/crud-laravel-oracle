<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendapatanRequest extends FormRequest
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
            // 'id'                => 'required',
            'tanggal'           => 'required',
            'kode_armada'       => 'required',
            'kode_barang'       => 'required',
            'jumlah_terjual'    => 'required',
            'sisa'              => 'required',
            'masukan'           => 'required'
        ];
    }
}