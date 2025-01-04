<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        @vite(["resources/css/app.css"])
    </head>
    <body>
        <x-test></x-test>
        <div class="h-screen">

            <header class="bg-blue-600 text-black text-center py-4">
                <div class="mx-auto">
                    <h1 class="text-3xl font-bold">My Laravel App</h1>
                </div>
            </header>
            <hr />
            
            <main class="flex-grow mx-auto py-8">
            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Welcome to My Laravel App</h2>
                <div class="mt-8">
                    @include('common.inner')
                </div>
            </div>
        </main>

        <div class="fixed bottom-0 left-0 w-full bg-blue-600 text-black py-4">
            <div class="mx-auto text-center">
                <p>&copy; 2024 My Laravel App. All rights reserved.</p>
            </div>
        </div>
        
    </div>
    </body>
    </html>
