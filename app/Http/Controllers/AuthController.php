<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(CreateUserRequest $request): RedirectResponse
    {

        User::create($request->validated());

        return to_route('register.success');
    }

    public function login(CreateUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $request->wantsJson()
                ? Response::api('Invalid Credentials', Response::HTTP_BAD_REQUEST)
                : back()->with('invalidCredential', 'Invalid Credentials');
        }

        $userData = $this->createAccessToken();

        return $request->wantsJson() ? $userData : to_route('home');
    }

    private function createAccessToken(): User
    {
        $user = user();
        $user->token = $user->createToken($user->email)->plainTextToken;

        session()->put('access_token', $user->token);

        return $user;
    }

    public function logout(Request $request)
    {
        user()->tokens()->delete();
        Auth::logout();

        return to_route('login');
    }
}
