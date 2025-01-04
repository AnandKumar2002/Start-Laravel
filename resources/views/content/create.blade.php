<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    @Vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 font-sans antialiased py-10 px-5">
    <div class="max-w-xl mx-auto bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Contact Us</h2>

        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="mb-6">
                <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" required
                    class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <div>
                <button type="submit"
                    class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Send
                </button>
            </div>
        </form>

        <!-- Success and Error Messages -->
        @if (session('success'))
            <p class="mt-4 text-green-600 font-medium">{{ session('success') }}</p>
        @endif

        @if (session('error'))
            <p class="mt-4 text-red-600 font-medium">{{ session('error') }}</p>
        @endif
    </div>
</body>

</html>
