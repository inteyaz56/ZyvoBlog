<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>ZyvoBlog - Home</title>


    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    button{
        background-color: red;
        color: white;
        border-radius: 8px;
        width: 150px;
        height: 40px;
        border: none;
        cursor: pointer;
    }

    body {
        background: #f8f9ff;
        color: #111827;
    }

    /* ================= SIDEBAR ================= */

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;

        width: 250px;
        height: 100vh;

        background: white;

        border-right: 1px solid #e5e7eb;

        display: flex;
        flex-direction: column;

        padding: 25px 14px;
    }

    .logo {
        padding: 0 15px;
        margin-bottom: 45px;
    }

    .logo h1 {
        color: #4f46e5;
        font-size: 28px;
    }

    .logo p {
        color: #6b7280;
        font-size: 13px;
        margin-top: 5px;
    }

    .nav {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .nav a {
        text-decoration: none;

        color: #374151;

        padding: 13px 16px;

        border-radius: 10px;

        font-size: 15px;

        transition: 0.2s;
    }

    .nav a:hover {
        background: #eef2ff;
        color: #4f46e5;
    }

    .nav a.active {
        background: #eef2ff;
        color: #4f46e5;
        font-weight: 600;
    }

    .profile {
        margin-top: auto;

        border-top: 1px solid #e5e7eb;

        padding: 20px 10px 5px;

        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .profile-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .avatar {
        width: 40px;
        height: 40px;

        border-radius: 50%;

        background: #4f46e5;

        color: white;

        display: flex;
        align-items: center;
        justify-content: center;

        font-weight: bold;
    }

    .profile-info h4 {
        font-size: 14px;
    }

    .profile-info p {
        font-size: 12px;
        color: #6b7280;

        margin-top: 3px;
    }

    /* ================= MAIN ================= */

    .main {
        margin-left: 250px;

        min-height: 100vh;

        padding: 25px 35px;
    }

    /* ================= TOPBAR ================= */

    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 35px;
    }

    .search {
        width: 55%;

        background: white;

        border: 1px solid #e5e7eb;

        border-radius: 12px;

        padding: 13px 18px;

        outline: none;

        font-size: 14px;
    }

    .search:focus {
        border-color: #6366f1;
    }

    .user {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .user-avatar {
        width: 38px;
        height: 38px;

        border-radius: 50%;

        background: #eef2ff;

        color: #4f46e5;

        display: flex;
        align-items: center;
        justify-content: center;

        font-weight: bold;
    }

    /* ================= HEADER ================= */

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 25px;
    }

    .header h2 {
        font-size: 30px;
        margin-bottom: 8px;
    }

    .header p {
        color: #6b7280;
    }

    .create-btn {
        text-decoration: none;

        background: #4f46e5;

        color: white;

        padding: 13px 20px;

        border-radius: 10px;

        font-size: 14px;

        font-weight: 600;

        transition: 0.2s;
    }

    .create-btn:hover {
        background: #4338ca;
    }

    /* ================= BLOG CARD ================= */

    .blog-list {
        display: flex;
        flex-direction: column;

        gap: 16px;
    }

    .blog-card {
        background: white;

        border: 1px solid #e5e7eb;

        border-radius: 15px;

        padding: 18px;

        display: flex;

        gap: 22px;

        min-height: 180px;

        transition: 0.2s;
    }

    .blog-card:hover {
        transform: translateY(-2px);

        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    }

    .blog-image {
        width: 220px;

        height: 145px;

        object-fit: cover;

        border-radius: 10px;

        flex-shrink: 0;
    }

    .blog-content {
        flex: 1;

        display: flex;
        flex-direction: column;
    }

    .author {
        display: flex;
        align-items: center;

        gap: 10px;

        margin-bottom: 12px;
    }

    .author-avatar {
        width: 34px;
        height: 34px;

        border-radius: 50%;

        background: #e0e7ff;

        color: #4f46e5;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 13px;

        font-weight: bold;
    }

    .author h4 {
        font-size: 14px;
    }

    .author span {
        font-size: 12px;

        color: #9ca3af;

        display: block;

        margin-top: 3px;
    }

    .blog-title {
        font-size: 20px;

        margin-bottom: 8px;
    }

    .blog-description {
        color: #6b7280;

        font-size: 14px;

        line-height: 1.6;

        max-width: 850px;
    }

    .tags {
        display: flex;

        gap: 8px;

        margin-top: auto;
    }

    .tag {
        background: #eef2ff;

        color: #4f46e5;

        padding: 6px 11px;

        border-radius: 7px;

        font-size: 12px;
    }

    .read-more {
        text-decoration: none;

        color: #4f46e5;

        font-weight: 600;

        font-size: 14px;

        align-self: flex-end;

        margin-top: 10px;
    }

    .read-more:hover {
        text-decoration: underline;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width: 900px) {
        .sidebar {
            width: 200px;
        }

        .main {
            margin-left: 200px;
            padding: 20px;
        }

        .blog-image {
            width: 180px;
        }
    }

    @media (max-width: 700px) {
        .sidebar {
            position: static;

            width: 100%;
            height: auto;

            padding: 15px;
        }

        .logo {
            margin-bottom: 20px;
        }

        .nav {
            flex-direction: row;
            flex-wrap: wrap;
        }

        .profile {
            display: none;
        }

        .main {
            margin-left: 0;
        }

        .topbar {
            flex-direction: column;

            gap: 15px;

            align-items: stretch;
        }

        .search {
            width: 100%;
        }

        .header {
            flex-direction: column;

            align-items: flex-start;

            gap: 15px;
        }

        .blog-card {
            flex-direction: column;
        }

        .blog-image {
            width: 100%;
            height: 200px;
        }

        .read-more {
            align-self: flex-start;
        }
    }
    </style>

</head>

<body>



    <aside class="sidebar">

        <div class="logo">
            <h1>ZyvoBlog</h1>
            <p>Write. Read. Grow.</p>
        </div>

        <nav class="nav">

            <a href="/" class="active">
                🏠 Home
            </a>

            <a href="/blogs/add">
                ＋ Create Post
            </a>

            <a href="/my-posts">
                📄 My Posts
            </a>

            <a href="/profile">
                👤 Profile
            </a>

            <form action="/users/logout"  method="post">
               @csrf
                <button style="cursor: pointer;">Logout</button>


            </form>
        </nav>



        <div class="profile">

            <div class="profile-info">

                <div class="avatar">
                    IA
                </div>

                <div>
                    <h4>Inteyaz Ansari</h4>
                    <p>View Profile</p>
                </div>

            </div>

            <span>→</span>

        </div>

    </aside>


    <!-- ================= MAIN ================= -->

    <main class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <input type="text" class="search" placeholder="Search blogs, authors, or topics...">

            <div class="user">

                <span>🔔</span>

                <div class="user-avatar">
                    IA
                </div>


            </div>

        </div>


        <!-- HEADER -->

        <div class="header">

            <div>

                <h2>Discover Amazing Stories</h2>

                <p>
                    Read ideas, experiences and perspectives from people around the world.
                </p>

            </div>

            <a href="/blogs/add" class="create-btn">
                ✎ Write a Blog
            </a>

        </div>


        <!-- BLOGS -->

      <section class="blog-list">

    @foreach ($blogs as $blog)

        <article class="blog-card">

                 <!--

                <img class="blog-image"
                src="{{ $blog->image }}"
                alt="{{ $blog->title }}">


                -->

            <div class="blog-content">

                <div class="author">

                    <div class="author-avatar">
                        {{ strtoupper(substr($blog->username, 0, 2)) }}
                    </div>

                    <div>
                        <h4>{{ $blog->username }}</h4>
                        <span>{{ $blog->created_at->format('d M Y') }}</span>
                    </div>

                </div>

                <h3 class="blog-title">
                    {{ $blog->title }}
                </h3>

                <p class="blog-description">
                    {{ $blog->content }}
                </p>

                <div class="tags">
                    <span class="tag">{{ $blog->tag1 }}</span>
                    <span class="tag">{{ $blog->tag2 }}</span>
                    <span class="tag">{{ $blog->tag3 }}</span>
                </div>

                <a href="#" class="read-more">
                    Read More →
                </a>

            </div>

        </article>

    @endforeach

</section>

    </main>


</body>

</html>
