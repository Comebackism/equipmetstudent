<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        <div class="w-60 h-60 bg-white opacity-20 rounded-full absolute top-10 left-10"></div>
        <div class="w-72 h-72 bg-white opacity-20 rounded-full absolute bottom-20 right-10"></div>
    </div>
    
    <div class="relative z-10 bg-white/80 backdrop-blur-md border border-red-400 shadow-2xl rounded-xl p-8 w-full max-w-md">
        <h1 class="text-4xl font-bold text-red-500 text-center mb-6">Welcome Back!</h1>
        <p class="text-center text-gray-600 mb-8">Log in to your account and continue exploring.</p>
        
        <form action="process_login.php" method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    placeholder="Your username"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-4 focus:ring-red-400 focus:outline-none" 
                    required>
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Your password"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-4 focus:ring-red-400 focus:outline-none" 
                    required>
            </div>
            <button 
                type="submit" 
                class="w-full py-3 bg-gradient-to-r from-red-500 to-red-600 text-white font-bold rounded-lg shadow-lg hover:from-red-600 hover:to-red-700 transition-transform transform hover:scale-105">
                Log In
            </button>
        </form>
        
        <div class="text-center mt-6">
            <p class="text-gray-600">
                <a href="#" class="text-red-500 font-medium hover:underline">Forgot Password?</a> | 
                <a href="register.php" class="text-red-500 font-medium hover:underline">Create an Account</a>
            </p>
        </div>
    </div>
</body>
</html>
