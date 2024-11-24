<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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

        .register-container {
            background-color: #fff;
            border: 1px solid #f44336; /* ขอบสีแดง */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px; /* เพิ่มขนาดกล่อง */
            padding: 40px;
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #f44336; /* สีแดง */
        }

        .register-container p {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-container form {
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

        .register-container button {
            padding: 10px;
            font-size: 16px;
            background-color: #f44336; /* ปุ่มสีแดง */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-container button:hover {
            background-color: #d32f2f; /* ปุ่มสีแดงเข้มเมื่อ hover */
        }

        .register-container .options {
            text-align: center;
            margin-top: 15px;
        }

        .register-container .options a {
            text-decoration: none;
            color: #f44336;
        }

        .register-container .options a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .register-container {
                padding: 20px; /* ลด padding สำหรับหน้าจอเล็ก */
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Create new Account</h1>
        <p>Already Registered? <a href="index.php">Log in here.</a></p>
        <form action="process_register.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <button type="submit">Sign up</button>
        </form>
    </div>
</body>
</html>
