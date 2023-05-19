<?php

namespace App\Http\Controllers;
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

class AuthController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
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

        if (!$token = auth('api')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return  response()->json([
            'status' => true,
            'message' => 'Đăng nhập thành công',
            'customer' => $request->email,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api'),
            'user' => auth('api')->user()
        ]);
    }

    public function register(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $token = $user->createToken('MyApp')->accessToken;
    
        return response()->json([
            'status' => true,
            'message' => 'Đăng ký thành công',
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }

    

    // public function login()
    // {
       
    //     if (Auth::check()) {
    //         return redirect()->route('dashboard');
    //     } else {
    //         return view('admin.Auth.login');
    //     }
    // }

    // public function postLogin(Request $request)
    // {
       
    //     $messages = [
    //         "email.exists" => "Email không đúng định dạng",
    //         "password.exists" => "Mật khẩu không đúng",
    //     ];
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'exists:users,email',
    //         'password' => 'exists:users,password',
    //     ], $messages);
    //     $data = $request->only('email', 'password');
    //     if (Auth::attempt($data)) {
    //         session()->flash('success', 'Đăng nhập thành công!');
    //         return redirect()->route('dashboard');
    //     } else {
    //         return back()->withErrors($validator)->withInput();
    //     }
    
    // }

    
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
    // public function forgot_password()
    // {
    //     return view('admin.Auth.forgot_password');
    // }
    // public function post_forgot_password(Request $request)
    // {
    //     $customer = User::where('email', $request->email)->first();
        
    //     if ($customer) {
    //         $pass = Str::random(6);
    //         $customer->password = bcrypt($pass);
    //         $customer->save();
            
    //         $data = [
    //             'name' => $customer->name,
    //             'pass' => $pass,
    //             'email' => $customer->email,
    //         ];
    //         try {
    //             // dd($customer);
    //             // dd($data);
    //             Mail::send('admin.Auth.password', compact('data'), function ($email) use ($customer) {
    //                 $email->subject('Shop TN');
    //                 $email->to($customer->email, $customer->name);
    //             });
    
    //             // Gửi email thành công
    //             $successMessage = 'Email đã được gửi thành công!';
    //             return redirect()->route('login')->with('success', $successMessage);
    //         } catch (\Exception $e) {
    //             // Gửi email không thành công
    //             $errorMessage = 'Đã xảy ra lỗi khi gửi email.';
    //             return redirect()->route('login')->with('error', $errorMessage);
    //         }
    //     } else {
    //         // Email không tồn tại
    //         $errorMessage = 'Email không tồn tại.';
    //         return redirect()->route('login')->with('error', $errorMessage);
    //     }
    // }
}
