<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인</title>
    <!-- 테일윈드CSS 스타일 시트 추가 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-8 bg-white rounded-lg shadow-md">

            <h2 class="text-2xl font-semibold mb-4">로그인</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">이메일:</label>
                    <input id="email" type="email" class="w-full border p-2 rounded-md" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">비밀번호:</label>
                    <input id="password" type="password" class="w-full border p-2 rounded-md" name="password" required>
                </div>

                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-sm text-gray-600">로그인 기억하기</label>
                </div>

                <div class="flex flex-col items-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-2" onclick="showLoginResult()">로그인</button>
                    <a href="{{ route('register.show') }}" class="text-blue-500 hover:underline">회원가입</a>
                    <a href="{{ route('home') }}" class="text-blue-500 hover:underline">메인으로</a>
                </div>
            </form>

        </div>
    </div>

    <script>
        function showLoginResult() {
            // Add your logic here to check if login is successful
            // For example, you can check for a specific message in the response
            let loginSuccessful = true; // Replace this with your actual logic

            // Display confirmation or failure dialog based on login result
            if (loginSuccessful) {
                alert('로그인 되었습니다.');
            } else {
                alert('로그인에 실패했습니다.');
            }
        }
    </script>

</body>

</html>
