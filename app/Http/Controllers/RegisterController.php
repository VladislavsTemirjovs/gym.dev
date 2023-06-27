<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('profile.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'sex' => 'required|in:Male,Female',
            'age' => 'required|integer',
            'weight' => 'nullable|numeric',
            'bench' => 'nullable|numeric',
            'squat' => 'nullable|numeric',
            'deadlift' => 'nullable|numeric',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'login' => $request->input('login'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'sex' => $request->input('sex'),
            'age' => $request->input('age'),
            'weight' => $request->input('weight'),
            'bench' => $request->input('bench'),
            'squat' => $request->input('squat'),
            'deadlift' => $request->input('deadlift'),
            'password' => Hash::make($request->input('password')),
            'role' => 'user',
        ]);

        return redirect()->route('profile.login');
    }
    public function login()
    {
        return view('profile.login');
    }
}
