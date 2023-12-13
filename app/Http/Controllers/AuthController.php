<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    // 회원가입 로직 수행
    // ...

    // 이미 존재하는 이메일인지 확인
    $existingUser = User::where('email', $request->input('email'))->first();

    if ($existingUser) {
        // 이미 존재하는 이메일일 경우 처리
        // 예를 들어, 오류 메시지를 표시하고 회원가입 페이지로 리다이렉션
        return redirect()->route('register')->with('error', '이미 등록된 이메일 주소입니다.');
    }

    // 가입 성공 시 사용자 정보 저장
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    // 다른 필요한 필드들도 저장

    // 비밀번호는 해싱하여 저장
    $user->password = bcrypt($request->input('password'));

    $user->save();

    // 로그인한 사용자의 이름 가져오기
    $userName = $user->name;

    // 사용자 이름을 세션에 저장
    Session::put('userName', $userName);

    // 가입 성공 메시지 설정
    Session::flash('success', '회원가입이 성공적으로 완료되었습니다.');

    // 게시판 페이지로 리다이렉션하면서 사용자의 이름을 함께 전달
    return redirect()->route('posts.index');
}

    public function login(Request $request)
    {
        // 유효성 검사 등을 수행하고 적절한 논리를 추가하세요.

        // 로그인 로직
        // ...

        return response()->json(['message' => 'Login successful'], 200);
    }
}
