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
            <h1>Blogify</h1>
            <p>Write. Read. Grow.</p>
        </div>

        <nav class="nav">

            <a href="/" class="active">
                🏠 Home
            </a>

            <a href="/add/post">
                ＋ Create Post
            </a>

            <a href="/my-posts">
                📄 My Posts
            </a>

            <a href="/profile">
                👤 Profile
            </a>

            <a href="/settings">
                ⚙️ Settings
            </a>

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

                <strong>Inteyaz Ansari</strong>

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

            <a href="/create-post" class="create-btn">
                ✎ Write a Blog
            </a>

        </div>


        <!-- BLOGS -->

        <section class="blog-list">


            <!-- BLOG 1 -->

            <article class="blog-card">

                <img class="blog-image" src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=600"
                    alt="Mountains">

                <div class="blog-content">

                    <div class="author">

                        <div class="author-avatar">
                            AS
                        </div>

                        <div>
                            <h4>Ananya Sharma</h4>
                            <span>5 Sep 2025</span>
                        </div>

                    </div>

                    <h3 class="blog-title">
                        Life Lessons from the Mountains
                    </h3>

                    <p class="blog-description">
                        Mountains have a unique way of teaching us patience,
                        perspective, and peace. Here are some valuable life
                        lessons I learned during my recent trip.
                    </p>

                    <div class="tags">
                        <span class="tag">Travel</span>
                        <span class="tag">Life</span>
                        <span class="tag">Growth</span>
                    </div>

                    <a href="#" class="read-more">
                        Read More →
                    </a>

                </div>

            </article>


            <!-- BLOG 2 -->

            <article class="blog-card">

                <img class="blog-image" src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=600"
                    alt="Work desk">

                <div class="blog-content">

                    <div class="author">

                        <div class="author-avatar">
                            RM
                        </div>

                        <div>
                            <h4>Rahul Mehta</h4>
                            <span>3 Sep 2025</span>
                        </div>

                    </div>

                    <h3 class="blog-title">
                        How to Stay Productive While Working Remotely
                    </h3>

                    <p class="blog-description">
                        Working from home can be challenging, but with the
                        right habits and mindset, you can become more productive
                        and maintain a healthy work-life balance.
                    </p>

                    <div class="tags">
                        <span class="tag">Productivity</span>
                        <span class="tag">Remote Work</span>
                        <span class="tag">Lifestyle</span>
                    </div>

                    <a href="#" class="read-more">
                        Read More →
                    </a>

                </div>

            </article>


            <!-- BLOG 3 -->

            <article class="blog-card">

                <img class="blog-image" src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=600"
                    alt="Programming">

                <div class="blog-content">

                    <div class="author">

                        <div class="author-avatar">
                            VR
                        </div>

                        <div>
                            <h4>Vikram Rao</h4>
                            <span>1 Sep 2025</span>
                        </div>

                    </div>

                    <h3 class="blog-title">
                        A Beginner's Guide to Node.js
                    </h3>

                    <p class="blog-description">
                        Node.js is a powerful runtime for building modern
                        backend applications. Learn the fundamentals and
                        understand why developers love using it.
                    </p>

                    <div class="tags">
                        <span class="tag">Technology</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">Programming</span>
                    </div>

                    <a href="#" class="read-more">
                        Read More →
                    </a>

                </div>

            </article>


            <!-- BLOG 4 -->

            <article class="blog-card">

                <img class="blog-image" src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600"
                    alt="Coffee">

                <div class="blog-content">

                    <div class="author">

                        <div class="author-avatar">
                            PV
                        </div>

                        <div>
                            <h4>Priya Verma</h4>
                            <span>28 Aug 2025</span>
                        </div>

                    </div>

                    <h3 class="blog-title">
                        The Power of Morning Routines
                    </h3>

                    <p class="blog-description">
                        A simple morning routine can set the tone for a more
                        focused and productive day. Here are some habits that
                        helped me improve my daily life.
                    </p>

                    <div class="tags">
                        <span class="tag">Lifestyle</span>
                        <span class="tag">Habits</span>
                        <span class="tag">Self Improvement</span>
                    </div>

                    <a href="#" class="read-more">
                        Read More →
                    </a>

                </div>

            </article>


            <!-- BLOG 5 -->

            <article class="blog-card">

                <img class="blog-image" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600"
                    alt="Beach">

                <div class="blog-content">

                    <div class="author">

                        <div class="author-avatar">
                            SK
                        </div>

                        <div>
                            <h4>Sameer Khan</h4>
                            <span>25 Aug 2025</span>
                        </div>

                    </div>

                    <h3 class="blog-title">
                        Why You Should Travel More
                    </h3>

                    <p class="blog-description">
                        Traveling isn't just about visiting new places.
                        It is about discovering new perspectives, meeting
                        amazing people, and creating unforgettable memories.
                    </p>

                    <div class="tags">
                        <span class="tag">Travel</span>
                        <span class="tag">Adventure</span>
                        <span class="tag">Life</span>
                    </div>

                    <a href="#" class="read-more">
                        Read More →
                    </a>

                </div>

            </article>

        </section>

    </main>


</body>

</html>