<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* รีเซ็ต CSS เบื้องต้น */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border: 1px solid #f44336; /* ขอบสีแดง */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px; /* เพิ่มขนาดสูงสุด */
            padding: 40px; /* เพิ่ม padding เพื่อให้ดูใหญ่ขึ้น */
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #f44336; /* สีแดง */
        }

        .login-container p {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            padding: 10px;
            font-size: 16px;
            background-color: #f44336; /* ปุ่มสีแดง */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #d32f2f; /* ปุ่มสีแดงเข้มเมื่อ hover */
        }

        .login-container .options {
            text-align: center;
            margin-top: 15px;
        }

        .login-container .options a {
            text-decoration: none;
            color: #f44336;
        }

        .login-container .options a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <p>Sign in to continue.</p>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="username" name="username" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
        <div class="options">
            <p><a href="#">Forgot Password?</a> | <a href="register.php">Sign up!</a></p>
        </div>
    </div>
</body>
</html>
