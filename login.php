<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 9px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            margin: 20px;
            padding: 20px;
        }

        .container h2 {
            text-align: center;
            color: #5b6574;
            font-size: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dee0e4;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            height: 50px;
            border: 1px solid #dee0e4;
            margin-bottom: 20px;
            padding: 0 15px;
            border-radius: 4px;
            font-size: 16px;
        }

        .container button[type="submit"] {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #3274d6;
            border: 0;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .container button[type="submit"]:hover {
            background-color: #2868c7;
        }

        .container .cancelbtn {
            background-color: #f44336;
            border: none;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .container .cancelbtn:hover {
            background-color: #c62828;
        }

        .container .psw {
            text-align: center;
            margin-top: 20px;
        }

        .container .psw a {
            color: #3274d6;
            text-decoration: none;
        }

        .container .psw a:hover {
            text-decoration: underline;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
        }

        .signup-link a {
            color: #3274d6;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>

        <form action="action.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <div class="signup-link">
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>
