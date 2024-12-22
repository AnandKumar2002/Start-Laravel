<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anand Kumar</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-500 h-screen">
    <div class="flex flex-col justify-center items-center h-full gap-4">
        {{ $slot }}

    </div>

</body>

</html>