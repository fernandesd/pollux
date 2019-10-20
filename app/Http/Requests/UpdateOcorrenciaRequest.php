<?php

namespace App\Http\Requests;

use App\Ocorrencia;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOcorrenciaRequest extends FormRequest
{
    
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return Ocorrencia::Rules();
    }


    protected function prepareForValidation()
    {
        $data = array_map(null, $this->all());
        
        $this->replace($data);
    }

}
