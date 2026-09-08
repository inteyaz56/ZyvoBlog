<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Post</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        padding: 40px;
    }

    .container {
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
    }

    h1 {
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
    }

    textarea {
        height: 150px;
        resize: vertical;
    }

    .buttons {
        display: flex;
        gap: 10px;
    }

    button,
    .back-btn {
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
    }

    button {
        background: #2563eb;
        color: white;
    }

    .back-btn {
        background: #6b7280;
        color: white;
    }
    </style>
</head>

<body>

    <div class="container">

        <h1>Add New Post</h1>

        @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
        @endif

        @if($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form action="/add/post" method="POST" enctype="multipart/form-data">

            @csrf

            <label for="title">Title</label>

            <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter post title">

            <label for="content">Content</label>

            <textarea id="content" name="content" placeholder="Write your post...">{{ old('content') }}</textarea>

            <label for="photo">Photo</label>

            <input type="file" id="photo" name="photo" accept="image/*">

            <div class="buttons">

                <button type="submit">
                    Add Post
                </button>

                <a href="{{ url('/') }}" class="back-btn">
                    Back
                </a>

            </div>

        </form>

    </div>

</body>

</html>