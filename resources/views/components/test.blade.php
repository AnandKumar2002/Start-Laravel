<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="bg-gray-800 p-4">
        <div class="flex space-x-6">
            <x-nav-link :action="true" href='home'>
                Home
            </x-nav-link>
            <x-nav-link :action="true" href="common">
                Common
            </x-nav-link>
            <x-nav-link :action="true" href="services">
                Services
            </x-nav-link>
            <x-nav-link :action="true" href="contact">
                Contact
            </x-nav-link>
        </div>
    </div>

</body>

</html>
