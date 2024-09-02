<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true; // Modifier selon les besoins d'autorisation.
    }

    /**
     * Obtenir les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user()->id)],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($this->user()->id)],
            'phone' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($this->user()->id)],
        ];
    }

    /**
     * Obtenir les messages d'erreur personnalisés pour les règles de validation définies.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'Veuillez fournir une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'username.required' => 'Le nom d’utilisateur est obligatoire.',
            'username.unique' => 'Ce nom d’utilisateur est déjà pris.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
        ];
    }
}