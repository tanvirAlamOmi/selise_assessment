<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    use HasApiTokens;
    public function login(Request $request)
    {   
        $user = User::where('email', $request->email)->first();
        if ($user) {
        if (Hash::check($request->password, $user->password)) {
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response['token'] = $token;
            $response['user'] = $user;
            return response($response, 200);
        } else {
            $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        }
        return response(["message" => "User not found"], 422);

    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response($user, Response::HTTP_CREATED);
    }

    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
