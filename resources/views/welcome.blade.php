<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        
        .container {
            text-align: center;
            padding: 2rem;
            max-width: 800px;
        }
        
        .logo {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            animation: fadeIn 1s ease-in;
        }
        
        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            animation: fadeIn 1.5s ease-in;
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 3rem;
            animation: fadeIn 2s ease-in;
        }
        
        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
            animation: fadeIn 2.5s ease-in;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        
        .feature-card p {
            opacity: 0.9;
            line-height: 1.6;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 768px) {
            .logo {
                font-size: 2rem;
            }
            
            .nav-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="logo">Welcome to Laravel</h1>
        <p class="subtitle">The PHP Framework for Web Artisans</p>
        
        <div class="nav-links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
            <a href="https://laravel.com/docs" target="_blank">Documentation</a>
        </div>
        
        <div class="features">
            <div class="feature-card">
                <h3>🚀 Fast</h3>
                <p>Optimized for performance with modern PHP features and caching strategies.</p>
            </div>
            <div class="feature-card">
                <h3>🛡️ Secure</h3>
                <p>Built-in protection against common vulnerabilities and security best practices.</p>
            </div>
            <div class="feature-card">
                <h3>📦 Expressive</h3>
                <p>Elegant syntax that makes development enjoyable and productive.</p>
            </div>
        </div>
    </div>
</body>
</html>