<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    @Vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans text-gray-900">
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Post Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-sm text-gray-500">Post ID: {{$post['id']}}</p>
            <h2 class="text-2xl font-semibold text-gray-900 mt-2">{{$post['title']}}</h2>
            <p class="text-lg text-gray-700 mt-4">{{$post['body']}}</p>
        </div>

        <a href="{{ url()->previous() }}" class="block mt-6 text-blue-500 hover:underline">
            Back to Posts
        </a>
    </div>
</body>
</html>
