<?php

namespace App\Http\Controllers;

use App\Notifications\RegisterMailNotification;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkMailShow()
    {
        return view('user.check_mail_show');
    }

    public function sendMailToken()
    {
        $user = auth()->user();
        $user->notify(new RegisterMailNotification($user));
        return back()->with('success', '邮箱验证码已经发送到你的邮箱' . $user->mail);
    }


    public function checkUserMail($token)
    {
        $user = User::where('mail_token', $token)->first();
        if ($user) {
            $user->mail_status = true;
            $user->save();
            return redirect('/')->with('success', '邮箱验证成功！');
        } else {
            return redirect('/')->with('danger', '账号不存在！');
        }
    }
}
