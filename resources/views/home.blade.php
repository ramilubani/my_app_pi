<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myapp</title>
</head>
<body>
<<<<<<< HEAD
    <div style="border:3px solid black;">
=======
    <div class="container">
        @auth
        <p class="message">Congrats, you are logged in!</p>
        <form action="/logout" method="post">
            @csrf
            <div class="form-group">
                <button>Logout</button>
            </div>
        </form>
        <h2>Create a New Post</h2>
        <form action="/create-post" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="Post title">
            </div>
            <div class="form-group">
                <textarea name="body" placeholder="Body content..."></textarea>
            </div>
            <div class="form-group">
                <button>Save Post</button>
            </div>
            <input type="text" name="Title" placeholder="post title">
            <textarea name="body" placeholder="body content ..."></textarea>
            <button>Save Post</button>
        </form>
        @else
>>>>>>> 7448693 (commit from debian)
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placelolder="name">
            <input type="text" name="email" placelolder="email">
            <input type="password" name="password" placelolder="password">
            <button>Register</button>
            </form>
    </div>
</body>
</html>