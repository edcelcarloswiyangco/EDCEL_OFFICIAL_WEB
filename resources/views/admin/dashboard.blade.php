<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
        <!-- Dashboard Header -->
        <section class="admin-hero">
            <div class="container">
                <div class="admin-hero-content">
                    <div>
                        <h1 class="section-title">Admin Dashboard</h1>
                        <p class="hero-description">Manage your blog posts and content</p>
                        <a href="{{ route('create.index') }}" class="cta-button" style="margin-top: 1.5rem;">
                            <i class="fa-solid fa-plus"></i> Create New Post
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Status Messages -->
        <section class="container" style="padding-bottom: 2rem;">
            @if (session('success'))
                <div style="background-color: rgba(0, 240, 255, 0.1); border: 1px solid #00f0ff; border-radius: 8px; padding: 1rem; color: #00f0ff; margin-bottom: 1.5rem;">
                    <i class="fa-solid fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif
            @if (session('status'))
                <div style="background-color: rgba(0, 240, 255, 0.1); border: 1px solid #00f0ff; border-radius: 8px; padding: 1rem; color: #00f0ff; margin-bottom: 1.5rem;">
                    <i class="fa-solid fa-info-circle"></i> {{ session('status') }}
                </div>
            @endif
        </section>

        <!-- Posts Grid -->
        <section class="container" style="margin-bottom: 5rem;">
            <h2 style="color: #ffffff; font-size: 2rem; font-weight: 700; margin-bottom: 2rem; text-align: left;">Your Posts</h2>
            
            @if($postings->isEmpty())
                <div style="text-align: center; padding: 3rem; color: #c0c0c0;">
                    <i class="fa-solid fa-inbox" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                    <p style="font-size: 1.1rem;">No posts yet. <a href="{{ route('create.index') }}" style="color: #00f0ff; text-decoration: none; font-weight: 600;">Create one now!</a></p>
                </div>
            @else
                <div class="posts-grid">
                    @foreach ($postings as $posting)
                        <div class="post-card">
                            <div class="post-image-container">
                                @if($posting->image)
                                    <img src="{{ asset('storage/' . $posting->image) }}" alt="{{ $posting->title }}" class="post-image" />
                                @else
                                    <div class="post-image-placeholder">
                                        <i class="fa-solid fa-image"></i>
                                    </div>
                                @endif
                                <span class="post-year">{{ $posting->year }}</span>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">{{ $posting->title }}</h3>
                                <p class="post-excerpt">{{ Str::limit($posting->content, 100) }}</p>
                                <div class="post-actions">
                                    <a href="{{ route('create.edit',['post' => $posting]) }}" class="post-action-btn edit-btn">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>
                                    <form method="POST" action="{{ route('create.destroy',['post' => $posting]) }}" class="post-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="post-action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this post?');">
                                            <i class="fa-solid fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Edcel Admin Dashboard. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>