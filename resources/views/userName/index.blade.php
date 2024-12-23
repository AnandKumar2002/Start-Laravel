<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TotolePost</title>
    @Vite(['resources/css/app.css'])

</head>
<body class="bg-gray-100 font-sans text-gray-900">

    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">

        <div class="bg-red-500 hover:bg-red-600 cursor-pointer text-white text-center rounded-full py-2">
            <p class="font-semibold text-lg">Hello, this is {{$name}}.</p>
        </div>

        <div class="mt-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Posts</h2>

            <div class="space-y-4">
                @foreach ($posts as $post)
                {{-- <a href="{{ route('user/{name}/{"[id]"}', $post['id']) }}" class="block"> --}}
                    <a href="{{ route('user.postDetails', ['name' => $name, 'id' => $post['id']]) }}" class="block">

                    <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition-all">
                        <p class="text-sm text-gray-500">Post ID: {{$post['id']}}</p>
                        <p class="text-xl font-semibold text-gray-900 mt-2">{{$post['title']}}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>
