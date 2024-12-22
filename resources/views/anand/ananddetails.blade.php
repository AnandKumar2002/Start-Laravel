<x-layout>
    <h1 class="border px-3 py-1 rounded-full text-3xl text-white">
        Anand Details
    </h1>

    <h2>Name: {{$anands['name']}}</h2>
    <h2>Prices: {{$anands['price']}}</h2>

    <a href="/anand" class="bg-blue-500 px-3 py-1  text-white text-xs rounded-full">Go Back</a>
</x-layout>