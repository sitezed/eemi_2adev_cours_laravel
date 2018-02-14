<?php

namespace Eemi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // permet de verifier si nous pouvons avoir acces à la Request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      // à gauche, les names du formulaire, à droite la règle à donner
      // name_formulaire => règle
        return [
            'titre' => 'string|between:3,25', // je desire un type string de 3 à 25 caractères
            'reference' => 'unique:produits,reference' // je souhaite que le name reference soit unique
        ];
    }
}
