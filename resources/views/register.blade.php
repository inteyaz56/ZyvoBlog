<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Register | ZyvoBlog</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #eef2ff, #f5f3ff, #ffffff);
    }

    .container {
        width: 100%;
        min-height: 100vh;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 20px;
    }

    .register-card {
        width: 100%;
        max-width: 430px;

        background: rgba(255, 255, 255, 0.95);

        padding: 40px;

        border-radius: 24px;

        box-shadow:
            0 20px 50px rgba(79, 70, 229, 0.12),
            0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .logo {
        text-align: center;
        margin-bottom: 30px;
    }

    .logo h1 {
        font-size: 32px;
        color: #4f46e5;
        margin-bottom: 8px;
    }

    .logo p {
        color: #6b7280;
        font-size: 14px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #1f2937;
    }

    input {
        width: 100%;
        height: 48px;

        padding: 0 16px;

        border: 1px solid #e5e7eb;
        border-radius: 12px;

        outline: none;

        font-size: 14px;

        background-color: #f9fafb;

        transition: 0.2s ease;
    }

    input:focus {
        border-color: #6366f1;
        background-color: #ffffff;

        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    input::placeholder {
        color: #9ca3af;
    }

    button {
        width: 100%;
        height: 50px;

        margin-top: 8px;

        border: none;
        border-radius: 12px;

        background: linear-gradient(135deg, #4f46e5, #6366f1);

        color: white;

        font-size: 16px;
        font-weight: 600;

        cursor: pointer;

        transition: 0.2s ease;

        box-shadow: 0 8px 20px rgba(79, 70, 229, 0.25);
    }

    button:hover {
        transform: translateY(-2px);

        box-shadow: 0 12px 25px rgba(79, 70, 229, 0.3);
    }

    button:active {
        transform: translateY(0);
    }

    .errors {
        color: red;
        margin-bottom: 15px;
    }


    .login-text {
        text-align: center;

        margin-top: 24px;

        font-size: 14px;

        color: #6b7280;
    }

    .login-text a {
        color: #4f46e5;

        text-decoration: none;

        font-weight: 600;

        margin-left: 4px;
    }

    .login-text a:hover {
        text-decoration: underline;
    }

    .footer {
        text-align: center;

        margin-top: 25px;

        font-size: 12px;

        color: #9ca3af;
    }

    @media (max-width: 500px) {
        .register-card {
            padding: 30px 22px;
        }

        .logo h1 {
            font-size: 28px;
        }
    }
    </style>


</head>

<body>
    <div class="container">

        <div class="register-card">

            <div class="logo">
                <h1>ZyvoBlog</h1>
                <p>Create your account and start sharing your stories.</p>
            </div>

            @if ($errors->any())

            <div class="errors">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>

            @endif

            <form action="/users/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>

                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>

                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                </div>

                <button type="submit">
                    Create Account
                </button>

            </form>

            <div class="login-text">
                Already have an account?
                <a href="/users/login">Login</a>
            </div>

            <div class="footer">
                © 2026 ZyvoBlog. All rights reserved.
            </div>

        </div>

    </div>


</body>

</html>