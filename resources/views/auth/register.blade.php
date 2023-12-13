<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원가입</title>
    <!-- 테일윈드CSS 스타일 시트 추가 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="max-w-md w-full p-8 bg-white rounded-lg shadow-md">

        <h2 class="text-2xl font-semibold mb-4">회원가입</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- 이름 입력 -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">이름:</label>
                <input id="name" type="text" class="w-full border p-2 rounded-md" name="name" value="{{ old('name') }}" required>
            </div>

            <!-- 이메일 입력 -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">이메일:</label>
                <input id="email" type="email" class="w-full border p-2 rounded-md" name="email" value="{{ old('email') }}" required>
            </div>

            <!-- 비밀번호 입력 -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">비밀번호:</label>
                <input id="password" type="password" class="w-full border p-2 rounded-md" name="password" required>
            </div>

            <!-- 비밀번호 확인 입력 -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">비밀번호 확인:</label>
                <input id="password_confirmation" type="password" class="w-full border p-2 rounded-md" name="password_confirmation" required>
            </div>

            <!-- 회원가입 버튼 -->
            <div class="mb-4 flex justify-center">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700" onclick="showRegisterResult()">회원가입</button>
            </div>
            <a href="{{ route('home') }}" class="text-blue-500 hover:underline mt-4 block text-center">메인으로</a>
        </form>

    </div>

    <script>
        function showRegisterResult() {
            // Add your logic here to check if registration is successful
            // For example, you can check for a specific message in the response
            let registerSuccessful = true; // Replace this with your actual logic

            // Display confirmation or failure dialog based on registration result
            if (registerSuccessful) {
                alert('회원가입에 성공했습니다.');
            } else {
                alert('회원가입에 실패했습니다.');
            }
        }
    </script>

</body>

</html>
