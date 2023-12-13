<!-- resources/views/posts/edit.blade.php -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시글 수정</title>
    <!-- 테일윈드CSS 스타일 시트 추가 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href={{ route('posts.index') }} class="text-2xl font-bold">게시판</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:underline">지식iN</a>
            </div>
        </div>
    </nav>

    <!-- 게시글 수정 폼 -->
    <div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-2xl mx-auto">

        <h2 class="text-3xl font-semibold mb-4">게시글 수정</h2>

        <form action="/posts/{{$post->id}}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">제목:</label>
                <input type="text" name="title" id="title" value="{{$post->title}}" class="w-full border p-3 rounded-md">
            </div>

            <div class="mb-6">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">내용:</label>
                <textarea name="content" id="content" rows="5" class="w-full border p-3 rounded-md">{{$post->content}}</textarea>
            </div>

            <div class="flex items-center justify-center space-x-4">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-700">수정</button>
                <a href="/posts" class="text-gray-600 hover:underline">취소</a>
            </div>
        </form>

    </div>

</body>

</html>
