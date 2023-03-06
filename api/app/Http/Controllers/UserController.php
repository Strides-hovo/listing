<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    
    private static string $authToken = '';



    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        return self::$authToken = $user->createToken($request->device_name)->plainTextToken;
    }


    


    public function registr(Request $request)
    {
 
       $data = $request->validate([
            'email' => 'required|email|unique:users,email' ,
            'password' => 'required',
            'name' => 'required',
            'device_name' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        return self::$authToken = $user->createToken($request->device_name)->plainTextToken;
    }





    public function logout(Request $request): bool
    {
        return !!$request->user()->currentAccessToken()->delete();
    }


}
