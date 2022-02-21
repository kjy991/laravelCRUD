<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/{{ $value->id }}">
            @method('PUT')
            @csrf

            <input class="font-bold text-gray-800" for="title" value = "NO.{{ $value->id }}" id="postId">
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Name: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="name" name="name" value="{{ $value->name }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content">{{ $value->content }}</textarea>
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">작성날짜: {{ $value->created_at }} </label>
                <label class="font-bold text-gray-800" for="content">수정날짜: {{ $value->updated_at }} </label>
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" onclick="return confirm('수정 하시겠습니까?');">Update</button>
            <a href="/" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>

        </form>
        <form method="POST" action="/{{ $value->id }}">
            @method('DELETE')
            @csrf
            <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
        </form>
        

    </div>
</body>
</html>
