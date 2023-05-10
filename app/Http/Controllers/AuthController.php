<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
// use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
       
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('admin.Auth.login');
        }
    }

    public function postLogin(Request $request)
    {
       
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            toast('Đăng Nhập Thành Công!','success','top-right');
            return redirect()->route('dashboard');
        } else {
            toast('Sai mật khẩu hoặc tài khoản!','error','top-right');
            return redirect()->route('login');
        }
    
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function forgot_password()
    {
        return view('admin.Auth.forgot_password');
    }
    public function post_forgot_password(Request $request)
    {
        $customer = User::where('email', $request->email)->first();
        
        if ($customer) {
            $pass = Str::random(6);
            $customer->password = bcrypt($pass);
            $customer->save();
            
            $data = [
                'name' => $customer->name,
                'pass' => $pass,
                'email' => $customer->email,
            ];
            try {
                // dd($customer);
                // dd($data);
                Mail::send('admin.Auth.password', compact('data'), function ($email) use ($customer) {
                    $email->subject('Shop TN');
                    $email->to($customer->email, $customer->name);
                });
    
                // Gửi email thành công
                $successMessage = 'Email đã được gửi thành công!';
                return redirect()->route('login')->with('success', $successMessage);
            } catch (\Exception $e) {
                // Gửi email không thành công
                $errorMessage = 'Đã xảy ra lỗi khi gửi email.';
                return redirect()->route('login')->with('error', $errorMessage);
            }
        } else {
            // Email không tồn tại
            $errorMessage = 'Email không tồn tại.';
            return redirect()->route('login')->with('error', $errorMessage);
        }
    }
}