<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- เพิ่มฟอนต์ Kanit -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-red-300 to-red-600 min-h-screen flex items-center justify-center relative">
    <!-- Background Shapes -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="w-80 h-80 bg-white opacity-20 rounded-full absolute top-10 left-20"></div>
        <div class="w-96 h-96 bg-white opacity-20 rounded-full absolute bottom-10 right-20"></div>
    </div>

    <!-- Register Form -->
    <div class="relative z-10 bg-white/90 backdrop-blur-md border border-red-400 shadow-2xl rounded-xl p-12 w-full max-w-2xl">
        <h1 class="text-5xl font-bold text-red-500 text-center mb-6">Create Your Account</h1>
        <p class="text-center text-gray-600 mb-8 text-lg">
            Already Registered? 
            <a href="index.php" class="text-red-500 font-medium hover:underline">Log in here</a>.
        </p>
        
        <form action="process_register.php" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2 text-lg">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Enter your name"
                    class="w-full p-4 border border-gray-300 rounded-lg text-lg focus:ring-4 focus:ring-red-400 focus:outline-none"
                    required>
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2 text-lg">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Enter your email"
                    class="w-full p-4 border border-gray-300 rounded-lg text-lg focus:ring-4 focus:ring-red-400 focus:outline-none"
                    required>
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2 text-lg">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Enter your password"
                    class="w-full p-4 border border-gray-300 rounded-lg text-lg focus:ring-4 focus:ring-red-400 focus:outline-none"
                    required>
            </div>
            <div>
                <label for="dob" class="block text-gray-700 font-semibold mb-2 text-lg">Date of Birth</label>
                <input 
                    type="date" 
                    id="dob" 
                    name="dob"
                    class="w-full p-4 border border-gray-300 rounded-lg text-lg focus:ring-4 focus:ring-red-400 focus:outline-none"
                    required>
            </div>
            <button type="submit" class="w-full py-4 bg-gradient-to-r from-red-500 to-red-600 text-white text-lg font-bold rounded-lg shadow-lg hover:from-red-600 hover:to-red-700 transition-transform transform hover:scale-105">
                Sign Up
            </button>
        </form>
    </div>
</body>
</html>
