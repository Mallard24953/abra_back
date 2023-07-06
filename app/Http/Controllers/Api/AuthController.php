<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($attr)) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
        $token = $request->user()->createToken('access_token')->plainTextToken;
        $user = auth()->user();


        $response = [
            'id' => $user->id,
            'user_email' => $user->email,
            'access_token' => $token,
        ];
        return response()->json($response, 200);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        $token = $request->user()->createToken('access_token')->plainTextToken;

        $response = [
            'id' => $user->id,
            'email' => $user->email,
            'access_token' => $token,
        ];
        return response()->json($response, 200);
    }
}
