<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            return redirect()->back()->with('success', 'Gửi email lấy lại mật khẩu thành công!');
        } else {
            return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }

    protected function broker()
    {
        return Password::broker();
    }
}
