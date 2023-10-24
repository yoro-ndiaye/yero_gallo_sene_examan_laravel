<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //-------formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    //-------Traitement du formulaire d'inscription--------//
    public function register(Request $request)
    {
        //------Validation des données du formulaire----------//
        $request->validate([
            'name' => 'required|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'nullable|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        //-------Création d'un nouvel utilisateur-----------//
        $user = User::create([
            'name' => $request->name,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);

    
        // Redirection dans l'accueuil apres l'inscription
        return redirect('/');
    }
}
