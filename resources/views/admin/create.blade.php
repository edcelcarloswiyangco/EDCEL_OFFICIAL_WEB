<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/css/admin.css'])
</head>
<body class="antialiased">
    <header class="navbar" id="navbar">
        <div class="container">
            <a href="#" class="nav-logo">EDCEL Admin</a>
            <nav class="nav-links">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </nav>
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="cta-button logout-btn">
                    <i class="fa-solid fa-sign-out-alt"></i> Log Out
                </button>
            </form>
        </div>
    </header>

    <main style="padding-top: 120px;">
        <section class="admin-hero">
            <div class="container">
                <h1 class="section-title">Create New Post</h1>
                <p class="hero-description">Share your latest project or update</p>
            </div>
        </section>

        <section class="container" style="margin-bottom: 5rem;">
            <div class="form-container">
                @if($errors->any())
                    <div style="background-color: rgba(255, 100, 100, 0.1); border: 1px solid #ff6464; border-radius: 8px; padding: 1rem; margin-bottom: 1.5rem;">
                        <i class="fa-solid fa-exclamation-circle"></i>
                        <ul style="margin-left: 1rem; margin-top: 0.5rem;">
                            @foreach($errors->all() as $error)
                                <li style="color: #ff9999; margin-bottom: 0.25rem;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('create.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter post title" class="form-input" value="{{ old('title') }}" required />
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" placeholder="Write your post content here..." class="form-input" rows="8" required>{{ old('content') }}</textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="number" id="year" name="year" placeholder="2025" class="form-input" value="{{ old('year') }}" min="2000" max="2099" required />
                        </div>

                        <div class="form-group">
                            <label for="image">Featured Image</label>
                            <div class="file-input-wrapper">
                                <input type="file" id="image" name="image" accept="image/*" class="file-input" />
                                <label for="image" class="file-input-label">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <span>Click to upload or drag & drop</span>
                                </label>
                            </div>
                            <p style="font-size: 0.85rem; color: #999; margin-top: 0.5rem;">PNG, JPG, GIF up to 2MB</p>
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('dashboard') }}" class="form-btn cancel-btn">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="form-btn submit-btn">
                            <i class="fa-solid fa-check"></i> Create Post
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Edcel Admin Dashboard. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>