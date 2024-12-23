<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sub View</title>
    @vite(["resources/css/app.css"])
</head>
<body>
    
    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Sub View Section</h2>
        <p class="text-gray-700 mb-4">
            This is the content of the sub-view. You can add additional details or components here.
        </p>
    
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-white rounded-lg shadow hover:bg-gray-100 transition">
                <h3 class="text-lg font-semibold text-blue-500">Feature 1</h3>
                <p class="text-gray-600">Description of feature 1.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow hover:bg-gray-100 transition">
                <h3 class="text-lg font-semibold text-blue-500">Feature 2</h3>
                <p class="text-gray-600">Description of feature 2.</p>
            </div>
        </div>
    </div>
    
</body>
</html>