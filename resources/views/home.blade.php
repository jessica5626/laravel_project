<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>지식iN</title>
  <!-- 테일윈드CSS 스타일 시트 추가 -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <a class="text-2xl font-bold" href="#">지식iN</a>
      <div class="space-x-4">
        <a href="{{ route('posts.index') }}" class="hover:underline">게시판</a>
        <a href="{{ route('login') }}" class="hover:underline">로그인</a>
      </div>
    </div>
  </nav>

  <!-- 나머지 내용은 여기에 추가 -->
  <div class="container mx-auto mt-8">
    <h1 class="text-4xl font-semibold mb-4">지식을 나누고 함께 성장하세요</h1>

    <p class="text-gray-700 mb-8">
      지식iN에서는 다양한 주제에 대한 질문과 답변을 통해 함께 배우고 성장할 수 있습니다.
    </p>

     <!-- 아이콘과 간단한 설명 -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- 아이콘과 설명 1 -->
      <div class="flex items-center">
        <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
          <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
        </svg>
        <p class="ml-4">다양한 주제의 질문과 답변을 통해 새로운 지식을 습득하세요. 자신이 알고 있는 것을 다른 이들과 공유하고 학습하세요.</p>
      </div>

      <!-- 아이콘과 설명 2 -->
      <div class="flex items-center">
        <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 1 21 12.79z"></path>
        </svg>
        <p class="ml-4">자신의 지식을 공유하고 다른 이들의 의견을 듣고 공감하세요. 토론을 통해 다양한 시각을 경험하세요.</p>
      </div>

      <!-- 아이콘과 설명 3 -->
      <div class="flex items-center">
        <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
          <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
        </svg>
        <p class="ml-4">지식iN에서 다양한 카테고리의 콘텐츠를 만나보세요. 여러 주제에 관한 흥미로운 이야기들이 기다리고 있습니다.</p>
      </div>
    </div>

    <!-- 이미지 4개 배치 -->
    <div class="grid grid-cols-2 gap-8">
      <!-- 이미지 1 -->
      <div class="relative mb-8 mt-8">
        <img src="https://cdn.pixabay.com/photo/2014/03/12/18/45/boys-286245_1280.jpg" alt="이미지 1" class="w-full h-64 object-cover rounded-lg">
      </div>

      <!-- 이미지 2 -->
      <div class="relative mb-8 mt-8">
        <img src="https://cdn.pixabay.com/photo/2020/01/22/09/39/teacher-4784916_1280.jpg" alt="이미지 2" class="w-full h-64 object-cover rounded-lg">
      </div>

      <!-- 이미지 3 -->
      <div class="relative">
        <img src="https://cdn.pixabay.com/photo/2023/11/01/07/41/ai-generated-8356763_1280.jpg" alt="이미지 3" class="w-full h-64 object-cover rounded-lg">
      </div>

      <!-- 이미지 4 -->
      <div class="relative">
        <img src="https://cdn.pixabay.com/photo/2016/11/14/05/15/academic-1822682_1280.jpg" alt="이미지 4" class="w-full h-64 object-cover rounded-lg">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>

</html>
