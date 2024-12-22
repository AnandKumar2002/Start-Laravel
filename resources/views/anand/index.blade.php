<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anand</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <h1 class="text-4xl font-bold p-4">Anand</h1>
    <ul class="p-4">
        @foreach($anands as $anand)
        <li class="text-2xl p-2 flex flex-col gap-2">
            <!-- <a href="{{ url('anand/' . $anand['id']) }}" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 flex justify-center">
                {{ $anand['name'] }}
            </a> -->
            <a href="./anand/{{$anand['id']}}" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 flex justify-center">{{$anand["name"]}}</a>
        </li>
        @endforeach
    </ul>
</body>

</html>