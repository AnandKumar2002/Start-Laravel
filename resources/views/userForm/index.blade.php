<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-4">
        <h1 class="text-3xl font-bold text-center mb-6 text-blue-600">User Form</h1>

        <form action="addUser" method="POST" class="grid grid-cols-1 gap-4 lg:grid-cols-2">
            @csrf
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" 
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter your name">
                <span class="text-red-500 text-sm mt-1 block">@error('name'){{$message}}@enderror</span>
            </div>

            <!-- Phone Number Field -->
            <div>
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" 
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter your phone number">
                <span class="text-red-500 text-sm mt-1 block">@error('phone'){{$message}}@enderror</span>
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter your email">
                <span class="text-red-500 text-sm mt-1 block">@error('email'){{$message}}@enderror</span>
            </div>

            <!-- Date of Birth Field -->
            <div>
                <label for="dob" class="block text-gray-700 font-medium mb-2">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value="{{ old('dob') }}" 
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <span class="text-red-500 text-sm mt-1 block">@error('dob'){{$message}}@enderror</span>
            </div>

            <!-- Gender Field -->
            <div>
                <label for="gender" class="block text-gray-700 font-medium mb-2">Gender:</label>
                <div class="flex space-x-4">
                    <label class="flex items-center">
                        <input type="radio" id="gender_male" name="gender" value="male" {{ old('gender') === 'male' ? 'checked' : '' }} class="mr-2"> Male
                    </label>
                    <label class="flex items-center">
                        <input type="radio" id="gender_female" name="gender" value="female" {{ old('gender') === 'female' ? 'checked' : '' }} class="mr-2"> Female
                    </label>
                </div>
                <span class="text-red-500 text-sm mt-1 block">@error('gender'){{$message}}@enderror</span>
            </div>

            <!-- Skills Field -->
            <div>
                <label for="skills" class="block text-gray-700 font-medium mb-2">Skills:</label>
                <div class="flex flex-wrap gap-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="HTML" {{ in_array('HTML', old('skills', [])) ? 'checked' : '' }} class="mr-2"> HTML
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="CSS" {{ in_array('CSS', old('skills', [])) ? 'checked' : '' }} class="mr-2"> CSS
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="JavaScript" {{ in_array('JavaScript', old('skills', [])) ? 'checked' : '' }} class="mr-2"> JavaScript
                    </label>
                </div>
                <span class="text-red-500 text-sm mt-1 block">@error('skills'){{$message}}@enderror</span>
            </div>

            <!-- Experience Field -->
            <div>
                <label for="experience" class="block text-gray-700 font-medium mb-2">Experience (Years):</label>
                <input type="range" id="experience" name="experience" min="0" max="10" value="{{ old('experience', 0) }}" 
                    class="w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <span class="text-gray-600 text-sm block mt-2">Selected: {{ old('experience', 0) }} years</span>
                <span class="text-red-500 text-sm mt-1 block">@error('experience'){{$message}}@enderror</span>
            </div>

            <!-- Country Field -->
            <div>
                <label for="country" class="block text-gray-700 font-medium mb-2">Country:</label>
                <select id="country" name="country" 
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="" disabled {{ old('country') ? '' : 'selected' }}>Select your country</option>
                    <option value="India" {{ old('country') === 'India' ? 'selected' : '' }}>India</option>
                    <option value="USA" {{ old('country') === 'USA' ? 'selected' : '' }}>USA</option>
                    <option value="UK" {{ old('country') === 'UK' ? 'selected' : '' }}>UK</option>
                </select>
                <span class="text-red-500 text-sm mt-1 block">@error('country'){{$message}}@enderror</span>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-blue-500 text-white py-3 rounded-lg font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Submit
            </button>
        </form>
    </div>

    <script>
        document.getElementById('phone').addEventListener('input', function(event) {
            let input = event.target.value;
            const cursorPosition = event.target.selectionStart;
            input = input.replace(/\D/g, '');
        
            if (input.length > 10) {
                input = input.slice(0, 10);
            }
        
            event.target.value = input;
        
            if (cursorPosition <= 10) {
                event.target.setSelectionRange(cursorPosition, cursorPosition);
            }
        });
    </script>
</body>
</html>
