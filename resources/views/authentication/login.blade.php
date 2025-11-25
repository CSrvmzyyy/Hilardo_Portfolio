<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <h1>Welcome Back</h1>
            <p>Login to your account</p>
        </div>

        @if ($errors->any())
            <div class="error-messages">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter your email" required>
            
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password" required>
            
            <input type="submit" value="Login">
        </form>

        <div class="auth-links">
            <p>Don't have an account? <a href="{{ route('register.form') }}">Register here</a></p>
        </div>
    </div>
</body>
</html>