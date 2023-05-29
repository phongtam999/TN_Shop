<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Config;

class AuthController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register','logout']]);
    }

    public function login(Request $request)
    {
        
        $validator = Validator::make( $request->all(),[
            'email' => 'required',
            'password' =>'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $data = $request->only('email', 'password');
        if (!$token = Auth::guard('api')->attempt($data)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return  response()->json([
            'status' => true,
            'message' => 'Đăng nhập thành công',
            'customer' => $request->email,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Config::get('jwt.ttl'),
            'user' => auth('api')->user()
        ]);
    }
    

    public function register(Request $request) {
        // dd('11');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:100|unique:customers',
            'password' => 'required||min:6',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
           
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = Customer::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

    public function logout(Request $request)
    {
        Auth::guard('api')->logout();   

        if ($request->expectsJson()) {
            return response()->json(['message' => 'User successfully signed out']);
        } else {
            return response()->json(['message' => 'Thất bại']);
        }
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => auth('api')->user(),
            'authorisation' => [
                'token' => Auth('api')::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }


    
    // public function login(Request $request)
    // {
        
    //     $validator = Validator::make( $request->all(),[
    //         'email' => 'required',
    //         'password' =>'required'
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 422);
    //     }

    //     if (!$token = auth('api')->attempt($validator->validated())) {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }
    //     return  response()->json([
    //         'status' => true,
    //         'message' => 'Đăng nhập thành công',
    //         'customer' => $request->email,
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth('api'),
    //         'user' => auth('api')->user()
    //     ]);
    // }

    // public function register(StoreUserRequest $request)
    // {
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);
    
    //     $token = $user->createToken('MyApp')->accessToken;
    
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Đăng ký thành công',
    //         'user' => $user,
    //         'authorization' => [
    //             'token' => $token,
    //             'type' => 'bearer',
    //         ]
    //     ]);
    // }
    // public function logout()
    // {
    //     auth('api')->logout();

    //     return response()->json(['message' => 'User successfully signed out']);
    // }

    // public function refresh()
    // {
    //     return response()->json([
    //         'status' => 'success',
    //         'user' => Auth::user(),
    //         'authorisation' => [
    //             'token' => Auth::refresh(),
    //             'type' => 'bearer',
    //         ]
    //     ]);
    // }

    

}