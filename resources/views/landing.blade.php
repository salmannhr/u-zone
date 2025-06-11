<!DOCTYPE html>
<html>
<head>
    <title>u-Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #5612D6, #D9CF79);
            height: 100vh;
            font-family: 'Inter', sans-serif;
            margin: 0;
        }
        .header {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 11px 24px 0 73px;
            color: white;
        }
        .left-header h1, .left-header h2 {
            margin: 0;
        }
        .left-header h2 {
            font-size: 1.2rem;
        }
        .right-header a {
            color: white;
            text-decoration: none;
            margin-left: 24px;
            margin-top: 24px;
        }
        .main-content {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .play-btn {
            padding-right: 5px;
            font-size: 50px;
            cursor: pointer;
            color: white;
            transition: transform 0.3s ease;
        }
        .btn-play:hover .play-btn {
            transform: scale(1.2);
        }
        .description {
            color: white;
            max-width: 500px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="left-header">
            <h1>Selamat Datang di U-Zone</h1>
            <h2>Tempat Terbaik untuk Menikmati Musik dan Video Favorit Anda</h2>
        </div>
        <div class="right-header d-flex align-items-start">
            <a href="{{route('login.view')}}"><h3>Login</h3></a>
            <a href="{{route('signup.view')}}"><h3>Signup</h3></a>
        </div>
    </div>

    <div class="main-content">
        <a href="{{ Auth::check() ? route('home') : route('login.view') }}" class="btn btn-primary rounded-circle p-4 btn-play">
            <i class="fas fa-play play-btn"></i>
        </a>
        <p class="description">
            Nikmati pengalaman multimedia yang mulus, cepat, dan intuitif. U-Zone adalah media player modern berbasis web yang memungkinkan Anda memutar musik dan video favorit langsung dari browser tanpa perlu instalasi tambahan.
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
