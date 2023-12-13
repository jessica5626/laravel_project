<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <!-- 테일윈드CSS 스타일 시트 추가 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold" href="{{ route('posts.index') }}">게시판</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:underline">지식iN</a>
                <a href="{{ route('posts.create') }}" class="hover:underline">게시글 작성</a>
            </div>
        </div>
    </nav>

    <!-- 나머지 내용은 여기에 추가 -->
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">게시글 목록</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="hover:no-underline">
                <div class="bg-white p-6 rounded-lg shadow-md transition duration-300 hover:shadow-xl hover:opacity-90">
                    <h3 class="text-xl font-semibold mb-2 transition duration-300 hover:text-blue-500 hover:font-bold">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-600">{{ $post->content }}</p>
                </div>
            </a>
            @empty
            <p class="text-gray-600">게시글이 없습니다.</p>
            @endforelse
        </div>
    </div>
</body>

</html>