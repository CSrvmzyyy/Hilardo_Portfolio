<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <h1>Create Account</h1>
            <p>Join us today</p>
        </div>

        @if ($errors->any())
            <div class="error-messages">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter your full name" required>
            
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter your email" required>
            
            <p>Password</p>
            <input type="password" name="password" placeholder="Create a password" required>
            
            <p>Confirm Password</p>
            <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
            
            <input type="submit" value="Register">
        </form>

        <div class="auth-links">
            <p>Already have an account? <a href="{{ route('login.form') }}">Login here</a></p>
        </div>
    </div>
</body>
</html>