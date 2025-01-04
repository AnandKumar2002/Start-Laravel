<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    @Vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans antialiased py-10 px-5">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">New Form Submission</h2>

        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <p class="text-lg text-gray-700"><strong>Name:</strong> {{ $formData['name'] }}</p>
            <p class="text-lg text-gray-700"><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p class="text-lg text-gray-700"><strong>Message:</strong> {{ $formData['message'] }}</p>
        </div>

        <div class="mt-4">
            <a href="{{route('contact')}}" 
               class="inline-block px-6 py-3 bg-gray-600 text-white font-semibold rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
               Return to the Form
            </a>
        </div>
    </div>
</body>
</html>
