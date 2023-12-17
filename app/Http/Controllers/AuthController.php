<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register(CreateUserRequest $request)
    {

        $user = User::create($request->validated());

        auth()->logout();
        return $request->wantsJson()
            ? Response::api(['data' => $user])
            : to_route('login');

    }

    public function login(CreateUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $request->wantsJson()
                ? Response::api('Invalid Credentials', Response::HTTP_BAD_REQUEST)
                : back()->with('invalidCredential', 'Invalid Credentials');
        }

        $userData = $this->createAccessToken();

        $lastUrl = Session::get('last_url');

        Session::forget('last_url');

        return $request->wantsJson() ? $userData : redirect()->to($lastUrl ?? route('home.index'));
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

        if ($request->wantsJson()) {
            user()->tokens()->delete();
            return Response::api('logged out successfully');
        }

        Auth::logout();

        return to_route('login');
    }
}
