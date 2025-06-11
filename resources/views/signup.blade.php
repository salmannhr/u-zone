<!DOCTYPE html>
<html>
<head>
    <title>Sign up - u-Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #5612D6, #D9CF79);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', sans-serif;
            margin: 0;
        }
        .card {
            width: 100%;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            padding: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3 class="text-center mb-4"><i class="fas fa-user-plus"></i> Sign up</h3>
        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100"><i class="fas fa-arrow-right"></i> Sign Up</button>
        </form>
        <div class="text-center mt-3">
            <span class="text-white">Already have an account? </span>
            <a href="{{ route('login.view') }}" class="btn btn-link text-white p-0">Login</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
