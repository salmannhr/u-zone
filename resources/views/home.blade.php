<!DOCTYPE html>
<html>
<head>
    <title>Home - u-Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #5612D6, #D9CF79);
            height: 100vh;
            margin: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: rgba(255, 255, 255, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 60px;
            position: relative;
        }
        form.logout-form {
            display: inline;
            margin: 0;
            padding: 0;
        }
        form.logout-form button.btn-back {
            position: absolute;
            left: 73px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            color: white;
            font-weight: 600;
            padding: 0;
            line-height: 1;
        }
        .nav-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        .nav-buttons button {
            background: none;
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
        .card {
            width: 100%;
            max-width: 400px;
            padding: 1.5rem;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <header>
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btn-back">
                <i class="fas fa-arrow-left"></i> Logout
            </button>
        </form>
        <div class="nav-buttons">
            <button onclick="location.href='{{ route('home') }}'">Home</button>
            <button onclick="location.href='{{ route('about') }}'">About Us</button>
        </div>
    </header>
    <main>
        <div class="card">
            <h3 class="text-center mb-4"><i class="fas fa-upload"></i> Upload Media</h3>
            <form id="uploadForm" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="file" name="media" id="mediaInput" class="form-control" accept="audio/*,video/*" required>
                </div>
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-play"></i> Upload & Play</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            const fileInput = document.getElementById('mediaInput');
            const maxSize = 50 * 1024 * 1024;
            
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size;
                if (fileSize > maxSize) {
                    event.preventDefault(); // Prevent form submission
                    alert('File size exceeds 50MB limit. Please choose a smaller file.');
                    fileInput.value = '';
                }
            }
        });
    </script>
</body>
</html>