<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
        }
        .login-box {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px #ccc;
            border-radius: 10px;
        }
        input, button {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2 style="text-align:center;">User Login</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
