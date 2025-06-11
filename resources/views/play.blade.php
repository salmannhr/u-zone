<!DOCTYPE html>
<html>
<head>
    <title>Play - u-Zone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { background: linear-gradient(to bottom, #5612D6, #D9CF79); height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; font-family: 'Inter', sans-serif; }
        .media-container { max-width: 600px; width: 100%; }
    </style>
</head>
<body>
    <div class="media-container">
        @if(str_contains($filePath, 'audio'))
            <audio controls class="w-100" style="max-height: 80px;">
                <source src="{{ asset('storage/' . $filePath) }}" type="audio/mp3">
            </audio>
        @else
            <video controls class="w-100" style="max-height: 500px;">
                <source src="{{ asset('storage/' . $filePath) }}" type="video/mp4">
            </video>
        @endif
    </div>
    <a href="{{ route('home') }}" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> Back</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>