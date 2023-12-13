<!-- resources/views/posts/show.blade.php -->

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시글 상세보기</title>
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

  <!-- 게시글 상세보기 컨테이너 -->
  <div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md">

    <!-- 게시글 정보 -->
    <div class="mb-8">
      <h1 class="text-3xl font-bold mb-2">{{$post->title}}</h1>
      <p class="text-sm text-gray-500">작성자: {{$post->user_id}} | 작성일: {{$post->created_at}} | 수정일: {{$post->updated_at}}</p>
    </div>

    <!-- 게시글 내용 -->
    <div class="mb-8">
      <p class="text-lg">{{$post->content}}</p>
    </div>

    <!-- 수정 및 삭제 버튼 -->
    <div class="flex items-center mb-8">
      <form action="/posts/{{$post->id}}/edit" method="get" class="mr-2">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">수정</button>
      </form>
      <form onsubmit="return confirm('삭제하시겠습니까?')" action="/posts/{{$post->id}}" method="post" class="mr-2">
        @csrf
        @method("delete")
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">삭제</button>
      </form>
      <a href="/posts" class="inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">목록으로 돌아가기</a>
    </div>

    <hr class="mb-8">

    <!-- 댓글 등록 폼 -->
    <div class="mb-6">
      <h2 class="text-xl font-bold mb-4">댓글 등록</h2>
      <form action="/posts/{{$post->id}}/comments" method="post">
        @csrf
        <div>
          <textarea rows="3" class="w-full p-2 border rounded" required name="content" placeholder="댓글을 입력하세요..."></textarea>
        </div>
        <button type="submit" class="mt-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">댓글 등록</button>
      </form>
    </div>

    <!-- 댓글 리스트 -->
    <div>
      <h2 class="text-xl font-bold mb-4">댓글 리스트 ({{$post->comments->count()}}개)</h2>
      <table class="w-full border">
        <thead>
          <tr>
            <th class="border p-2">내용</th>
            <th class="border p-2">작성자</th>
            <th class="border p-2">작성일</th>
            <th class="border p-2">수정</th>
            <th class="border p-2">삭제</th>
          </tr>
        </thead>
        <tbody>
          @foreach($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
          <tr>
            <td class="border p-2">{{$comment->content}}</td>
            <td class="border p-2">{{$comment->user_id}}</td>
            <td class="border p-2">{{$comment->created_at}}</td>
            <td class="border p-2">
              <form action="{{ route('comments.update', ['post' => $post->id, 'comment' => $comment->id]) }}" method="post">
                  @csrf
                  @method("put")
                  <div class="flex">
                      <input type="text" value="{{$comment->content}}" name="content" class="w-full p-2 border rounded mr-2">
                      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">수정</button>
                  </div>
              </form>
          </td>
            <td class="border p-2">
              <form action="/posts/{{$post->id}}/comments/{{$comment->id}}" method="post">
                @csrf
                @method("delete")
                <button type="submit" onclick="return send_delete()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">삭제</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function send_delete() {
      return confirm("삭제하시겠습니까?");
    }
  </script>
</body>

</html>
