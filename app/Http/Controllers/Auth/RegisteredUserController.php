<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'in:Male,Female'],
            'age' => ['required', 'integer', 'min:12', 'max:100'],
            'weight' => ['required', 'numeric', 'min:40', 'max:200'],
            'bench' => ['nullable', 'numeric', 'min:20', 'max:999'],
            'squat' => ['nullable', 'numeric', 'min:20', 'max:999'],
            'deadlift' => ['nullable', 'numeric', 'min:20', 'max:999'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
    
        Auth::login($user = User::create([
            'login' => $request->login,
            'name' => $request->name,
            'surname' => $request->surname,
            'image' => 'profile/-2.jpg',
            'sex' => $request->sex,
            'age' => $request->age,
            'weight' => $request->weight,
            'bench' => $request->bench,
            'squat' => $request->squat,
            'deadlift' => $request->deadlift,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]));
    
        event(new Registered($user));
    
        return redirect()->route('login');
    }
}
