<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시글 작성</title>
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

  <!-- 나머지 내용은 여기에 추가 -->
  <div class="container mx-auto mt-8 flex justify-center">
    <div class="w-full md:w-2/3 lg:w-1/2 xl:w-1/2">
      <h2 class="text-3xl font-semibold mb-8 text-center">게시글 작성</h2>

      <form action="/posts" method="POST" class="bg-white p-8 rounded-lg shadow-md">
        @csrf
        <div class="mb-6">
          <label for="title" class="block text-gray-700 text-sm font-bold mb-2">제목:</label>
          <input type="text" name="title" id="title" class="w-full border p-3 rounded-md">
        </div>

        <div class="mb-6">
          <label for="content" class="block text-gray-700 text-sm font-bold mb-2">내용:</label>
          <textarea name="content" id="content" rows="5" class="w-full border p-3 rounded-md"></textarea>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">등록</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
