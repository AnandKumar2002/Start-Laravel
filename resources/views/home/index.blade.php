<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    @vite(["resources/css/app.css"])
</head>
<body class="bg-gray-100 text-gray-800 p-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome, {{ $name }}</h1>
        
        <ul class="list-disc pl-5 mb-6">
            @foreach($homeUser as $user)
                <li class="text-lg text-gray-700">{{ $user }}</li>
            @endforeach
        </ul>

        <div class="grid grid-cols-2 gap-4">
            @for($i = 0; $i <= 10; $i++)
                <div class="p-4 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-green-500">{{$i}}</h3>
                </div>
            @endfor
        </div>
    </div>
</body>
</html>
