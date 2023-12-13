<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 회원가입 로직을 처리합니다.
        
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    
        // 나머지 로직...
    
        return $user;
    }
    
    public function store(Request $request)
    {
        // 여러 회원가입 로직 수행
        $user = $this->register($request);
        
        // 회원가입이 성공하면, 로그인 후 /posts 페이지로 이동
        Auth::login($user); // $user는 회원가입된 사용자 모델
        
        return redirect('/posts'); // /posts 페이지로 리다이렉션
    }
}
