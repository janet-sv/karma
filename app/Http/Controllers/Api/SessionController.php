<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\SessionCreateFormRequest;

use App\Models\User;

use JWTAuth;
use JWTFactory;
use Hash;

class SessionController extends Controller
{
    public function get()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

    public function create(SessionCreateFormRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $user = User::where('email', $email)->first();

        if (!Hash::check($password, $user->password)) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }

        try {
            $token = JWTAuth::fromUser($user);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        
        $response = [
            'user' => $user->toArray(),
            'token' => $token
        ];

        // all good so return the token and the user
        return response()->json($response);
    }
}
